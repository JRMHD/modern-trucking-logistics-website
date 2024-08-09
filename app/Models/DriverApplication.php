<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverApplication extends Model
{
    use HasFactory;

    protected $table = 'driver_applications'; // Optional if table name follows Laravel's conventions

    protected $fillable = [
        'name',
        'license',
        'license_expiration',
        'endorsements',
        // 'background_check',
        'schedule',
        'address',
        'phone',
        'email',
        'experience',
        'resume',
        'role',
    ];
}
