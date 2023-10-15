<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient_Basic_Params extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = ['patient_id', 'date_of_parameters', 'patient_height', 'patient_weight'];


}