<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'trucker_id', 'type', 'start_date', 'end_date', 'status'
    ];

    public function transporter()
    {
        return $this->belongsTo(Transporter::class, 'trucker_id');
    }
}
