<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transporter extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'transportable_id', 'transportable_type', 'license_number', 'license_expiry', 'vehicle_type', 'vehicle_registration', 'insurance_number', 'insurance_expiry'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transportable()
    {
        return $this->morphTo();
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class, 'trucker_id');
    }
}
