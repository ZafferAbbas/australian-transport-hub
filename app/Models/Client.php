<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'clientable_id', 'clientable_type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function clientable()
    {
        return $this->morphTo();
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
