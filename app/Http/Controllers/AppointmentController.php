<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Timeslot;
use App\Models\Treatment;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreAppointmentRequest;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $treatments = Treatment::all();
        $timeslots = Timeslot::all();
        $appointments = DB::table('appointments')
        ->join('users', 'appointments.user_id', '=', 'users.id')
        ->join('timeslots', 'appointments.timeslot_id', '=', 'timeslots.id')
        ->select('appointments.*', 'users.name', 'timeslots.start_time', 'timeslots.end_time')
        ->get();


        return Inertia::render('User/appointments/index', ['treatments' => $treatments, 'timeslots' => $timeslots, 'appointments' => $appointments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppointmentRequest $request)
    {
        $validated_data = $request->validated();



        $treatment = data_get($validated_data, 'treatment_id', false);


        unset($validated_data['treatment_id']);


        $validated_data['user_id'] = Auth::user()->id;

        $appointment = Appointment::create($validated_data);       


        if ($treatment) {
            $appointment->treatments()->attach($treatment);
        }

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->treatments()->detach();
        $appointment->delete();
        
        return Redirect::back()->with('success', 'Appointment deleted.');  
    }
}
