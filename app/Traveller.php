<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traveller extends Model
{
    protected $fillable = [
        'traveller_id',
        'zip_code_id',
        'major_id',
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
        'medical_issue',
        'medical_info',
    ];

    public function study()
    {
        return $this->belongsTo('App\Study');
    }
    public function trip()
    {
        return $this->belongsTo('App\Trip');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function zipcode()
    {
        return $this->belongsTo('App\ZipCode');
    }
}
