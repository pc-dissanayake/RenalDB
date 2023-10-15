<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Keys_and_values extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'keysofthekeygroup',
        'keysofthekey',
        'option',
        'valuesofthekey',
        'patientID_prefix'
    ];

    
}