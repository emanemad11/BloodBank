<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    protected $table = 'cities';
    public $timestamps = true;
    protected $fillable = array('name', 'governorate_id');

    public function clients()
    {
        return $this->hasMany('Client');
    }

    public function governorate()
    {
        return $this->belongsTo('App\Models\Governorate');
    }

    public function donationRequests()
    {
        return $this->hasMany(DonationRequest::class);
    }

    public function bloodType()
    {
        return $this->belongsTo(BloodType::class);
    }

}
