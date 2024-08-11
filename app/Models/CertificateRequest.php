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
        'delivery_method', 
        'dot_number',
        'email',
        'certificate_type',
        'latitude',
        'longitude',
        'location_name',
        'insurance_certificate',
        'limit_requested',
    ];
}
