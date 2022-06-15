<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'date'=> ['required', 'exists:appointments', 'after_or_equal:' . now()->format('d-m-Y')],
            'treatment_id'=> ['nullable'], 
            'has_haircut'=> ['required', 'exists:appointments'],
            'timeslot_id'=> ['required' ],
        ];
    }
}
