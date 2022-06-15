<?php

namespace App\Models;

use App\Models\Treatment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class);
    }
}
