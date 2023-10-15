<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use App\Models\Patient_basic_dermographic;
use App\Models\Keys_and_values;
use Carbon\Carbon;

use App\Models\DataLogAll;
use Illuminate\Support\Facades\Auth;


class Editprimarydata extends Component
{
    public $patientIDfromURL ="";
    public $mohlist = [];

    public $healthInstitution_Number;
    public $healthInstitution_Location;
    public $institution_ID_Type;
    public $institution_ID_Number;
    public $patient_birthday;
    public $patient_gender;
    public $patient_ethnicity;
    public $patient_age_of_primary_diagnosis;
    public $patient_age_of_primary_diagnosis_years;
    public $patient_age_of_primary_diagnosis_months;
    public $patient_primary_diagnosis;
    public $patient_moh;
    public $patientdistrict;
    public $patient_contact_number;
    public $userlocationhospitaltext;


    public $patientbasics;

    
    public function updatedPatientdistrict($value)
    {
        $this->patient_moh = '';
        $this->mohlist = Keys_and_values::where('keysofthekeygroup', 'mohareasvsdistricts')->where('keysofthekey', $value)->get(['option as moharea']);
    }
    
    public function mount()
    {
            $this->patientIDfromURL = request()->pid;


        $this->patientbasics = Patient_basic_dermographic::where('patient_id', $this->patientIDfromURL)->first();
     $this->healthInstitution_Number= $this->patientbasics->healthInstitution_Number;
        $this->userlocationhospitaltext = Keys_and_values::where('valuesofthekey', $this->healthInstitution_Number)->first(['option as userlocationhospitalid']);



     $this->healthInstitution_Location= $this->patientbasics->healthInstitution_Location;
     $this->institution_ID_Type= $this->patientbasics->institution_ID_Type;
    $this->institution_ID_Number=$this->patientbasics-> institution_ID_Number;
     $this->patient_birthday=$this->patientbasics->patient_birthday;
     $this->patient_gender=$this->patientbasics->patient_gender;
     $this->patient_ethnicity=$this->patientbasics->patient_ethnicity ;
        $pieces = explode(",", $this->patientbasics->patient_age_of_primary_diagnosis);
        $this->patient_age_of_primary_diagnosis_years = preg_replace('/\D+/', '', $pieces[0]);
        $this->patient_age_of_primary_diagnosis_months = preg_replace('/\D+/', '', $pieces[1]);
    $this->patient_primary_diagnosis= $this->patientbasics->patient_primary_diagnosis;
    $this->patientdistrict= $this->patientbasics->patient_geographics_district;
    $this->mohlist = Keys_and_values::where('keysofthekeygroup', 'mohareasvsdistricts')->where('keysofthekey', $this->patientdistrict)->get(['option as moharea']);
    $this->patient_moh= $this->patientbasics->patient_geographics_moh;

    $this->patient_contact_number= $this->patientbasics->patient_contact_number;
        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "Edit_Request_Primary_Data";
        $newuserlog->Data_Set     = "Old_Data:".  (string)($this->patientbasics);
        $newuserlog->save();

     


    }

    protected $rules = [
        'healthInstitution_Number' => 'required',
        'institution_ID_Type' => 'required',
        'institution_ID_Number' => 'required',
        'patient_birthday' => 'required|date',
        'patient_gender' => 'required',
        'patient_ethnicity' => 'required',
        'patient_primary_diagnosis' => 'required',
        'patientdistrict' => 'required',
        'patient_moh' => 'required',
    ];

     public function saveandaddnewchild(){


     

    $this->validate();


        $editupdate = Patient_basic_dermographic::where('patient_id',$this->patientIDfromURL)->first();
        $editupdate->healthInstitution_Number = $this->healthInstitution_Number;
        $editupdate->healthInstitution_Location = $this->healthInstitution_Location;
        $editupdate->patient_birthday = Carbon::parse($this->patient_birthday)->format("Y/m/d");
        $editupdate->patient_gender = $this->patient_gender;
        $editupdate->patient_ethnicity = $this->patient_ethnicity;
        $editupdate->institution_ID_Type = $this->institution_ID_Type;
        $editupdate->institution_ID_Number = $this->institution_ID_Number;
        $editupdate->patient_primary_diagnosis = $this->patient_primary_diagnosis;
        $editupdate->patient_age_of_primary_diagnosis = $this->patient_age_of_primary_diagnosis_years . ' Years, ' . $this->patient_age_of_primary_diagnosis_months . ' Months';
        $editupdate->patient_geographics_moh = $this->patient_moh;
        $editupdate->patient_geographics_district = $this->patientdistrict;
        $editupdate->patient_contact_number = $this->patient_contact_number;
        $editupdate->created_user =    auth()->id();



        $editupdate->save();

        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "Edit_Request_Primary_Data";
        $newuserlog->Data_Set     = "New_Data:" .  (string)($editupdate);
        $newuserlog->save();

        




        return redirect()->route('patient_management', ['pid' => $this->patientIDfromURL]);


     }


    public function render()
    {

        // 


        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "PageView";
        $newuserlog->Data_Set     = "Edit-PrimaryData";
        $newuserlog->save();


        
        return view('livewire.app.editprimarydata',[]);
    }
}