<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'company_name', 'contact_name', 'contact_email', 'contact_phone', 'address'
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
