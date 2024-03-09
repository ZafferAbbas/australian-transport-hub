<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDescription extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'job_id', 'job_title', 'job_description', 'job_category', 'cargo_diameters', 'cargo_quantity', 'cargo_names', 'pickup_location', 'pickup_date', 'delivery_location', 'delivery_date', 'job_files', 'job_images'
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function category()
    {
        return $this->belongsTo(JobCategory::class, 'job_category');
    }
}
