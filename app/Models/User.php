<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'email', 'password', 'remember_token', 'status'
    ];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function transporters()
    {
        return $this->hasMany(Transporter::class);
    }
}
