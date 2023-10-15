<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient_basic_dermographic extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = ['healthInstitution_Number', 'healthInstitution_Location', 'institution_ID_Type', 'institution_ID_Number', 'patient_birthday', 'patient_gender', 'patient_ethnicity', 'patient_age_of_primary_diagnosis', 'patient_primary_diagnosis'];

}