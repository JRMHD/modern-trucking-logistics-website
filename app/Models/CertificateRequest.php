<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_address',
        'reason',
        'email',
        'delivery_email', 
        'dot_number',
        'special_requests',
        'latitude',
        'longitude',
        'location_name',
        'limit_requested',
    ];
}
