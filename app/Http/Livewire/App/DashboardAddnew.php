<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Keys_and_values;
use App\Models\Patient_basic_dermographic;
use Carbon\Carbon;
use App\Models\DataLogAll;

class DashboardAddnew extends Component
{      
    
    
    public $healthInstitution_Number;
    public $healthInstitution_Location;
    public $institution_ID_Type;
    public $institution_ID_Number;
    public $patient_birthday ;
    public $patient_gender;
    public $patient_ethnicity;
    public $patient_age_of_primary_diagnosis;
    public $patient_age_of_primary_diagnosis_years=0;
    public $patient_age_of_primary_diagnosis_months;
    public $patient_primary_diagnosis;
    public $patient_moh;
    public $patientdistrict;
    public $patient_contact_number;


    public $mohlist =[];



    public $diseasesshort = array(
        "NS" => "Nephrotic Syndrome",
        "CKD" => "Chronic Kidney Disease",
        "AKI" => "Acute Kidney Injury",
        "AGN" => "Acute Glomerulonephritis",
        "SLE" => "Systemic Lupus Erythematosus",
        "IGA" => "IgA nephropathy",
        "CAK" => "Congenital Anomalies of the Kidney and Urinary Tract",
        "UTI" => "Urinary Tract Infections",
        "RCD" => "Renal Calculus Disease",
    );



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


    

    public function mount (){


    }


    public function updatedPatientdistrict ($value){
        $patient_moh = '';        
        $this->mohlist = Keys_and_values::where('keysofthekeygroup', 'mohareasvsdistricts')->where('keysofthekey', $value)->get(['option as moharea']);

      


    }
    public function saveandaddnewchild(){

    
       

    //$this->validate();


       $nextgeneratedid = $this->GenarateGetNextValue();


       //print_r( $nextgeneratedid);
      // print_r(Carbon::parse($this->patient_birthday)->format("Y/m/d"));


        $basicnew = new Patient_basic_dermographic;

        $basicnew->patient_id = trim($nextgeneratedid) ;
        $basicnew->healthInstitution_Number = $this->healthInstitution_Number;
        $basicnew->healthInstitution_Location = $this->healthInstitution_Location;
        $basicnew->patient_birthday = Carbon::parse($this->patient_birthday)->format("Y/m/d");
        $basicnew->patient_gender = $this->patient_gender;
        $basicnew->patient_ethnicity = $this->patient_ethnicity;
        $basicnew->institution_ID_Type = $this->institution_ID_Type;
        $basicnew->institution_ID_Number = $this->institution_ID_Number;
        $basicnew->patient_primary_diagnosis = $this->patient_primary_diagnosis;
        $basicnew->patient_age_of_primary_diagnosis = $this->patient_age_of_primary_diagnosis_years . ' Years, '. $this-> patient_age_of_primary_diagnosis_months . ' Months' ;
        $basicnew->patient_geographics_moh = $this->patient_moh;
        $basicnew->patient_geographics_district = $this->patientdistrict;
        $basicnew->patient_contact_number = $this->patient_contact_number;
        $basicnew->created_user =    auth()->id();



        $basicnew->save();

        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "Add_New_Patient";
        $newuserlog->Data_Set     = "New_Data:" .  (string)($basicnew);
        $newuserlog->save();

        return redirect()->route('patient_management', ['pid' => $nextgeneratedid]);

        
    }

    private function GenarateGetNextValue(){


$startnumber =1000000;
$nextid =0;
$startnumber1 ='100-0000';

$lastID = Patient_basic_dermographic::withTrashed()
                ->orderBy('id', 'DESC')
                ->orderBy('created_at', 'ASC')
                ->first();

        $lastidnumerical = (int) str_replace('-', '', $lastID['patient_id']);
        $lastidnumerical++;
        $nextid = substr_replace ($lastidnumerical, '-',3, 0);
        
return $nextid;


    }   
     public function boot(){

     if (Auth::user()->access_to_create == 0) {
            $newuserlog = new DataLogAll();
            $newuserlog->user_id = Auth::id();
            $newuserlog->log_catergory     = "Access_Denied";
            $newuserlog->Data_Set     = "Page:AddNew,Reason:NO_access_to_create";
            $newuserlog->save();

            abort(500);
        }
    }


    public function render()
    {

       

        $this->healthInstitution_Number =  Auth::user()->hospital;

        $userlocationhospitaltext = Keys_and_values::where('valuesofthekey', $this->healthInstitution_Number)->first(['option as userlocationhospitalid']);

        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "PageView";
        $newuserlog->Data_Set     = "AddNew";
        $newuserlog->save();



        return view('livewire.app.dashboard-addnew')
        ->with('userlocationhospitaltext', $userlocationhospitaltext)
        ->with('userlocationhospitalid', $this->healthInstitution_Number);
    }
}