<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Individual extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name', 'last_name', 'phone_number', 'address'
    ];

    public function clients()
    {
        return $this->morphMany(Client::class, 'clientable');
    }

    public function transporters()
    {
        return $this->morphMany(Transporter::class, 'transportable');
    }
}
