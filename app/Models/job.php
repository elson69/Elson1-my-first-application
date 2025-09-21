<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Use the job_listings table
    protected $table = 'job_listings';

    // Define relationship to Employer
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
