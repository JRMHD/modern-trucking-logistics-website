<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'inquiries';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'name',
        'email',
        'phone',
        'dot_mc_number',
        'equipment_type',
        'equipment_details',
        'additional_info',
    ];

    // If you have timestamps columns, you can specify them
    public $timestamps = true;

    // Optionally, you can define hidden attributes or casts if needed
    // protected $hidden = [];
    // protected $casts = [];
}
