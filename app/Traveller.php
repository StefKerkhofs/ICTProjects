<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traveller extends Model
{
    //
    protected $fillable = [
        'traveller_id',
        'zipcode_id',
        'study_id',
        'trip_id',
        'user_id',
        'firstname',
        'lastname',
        'city',
        'country',
        'address',
        'sex',
        'phone',
        'emergency_phone_1',
        'emergency_phone_2',
        'nationality',
        'birthdate',
        'birthplace',
        'MedicalIssue',
        'medical_info',
    ];

    protected function study()
    {
        return $this->belongsTo('App\StudiesModel');
    }
}
