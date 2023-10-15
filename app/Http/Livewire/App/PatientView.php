<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use App\Models\Patient_basic_dermographic;
use App\Models\Patient_Basic_Params;
use App\Models\Keys_and_values;
use Symfony\Component\HttpFoundation\Request;
use App\Models\DiseasePatterns2;
use App\Models\DataLogAll;
use Illuminate\Support\Facades\Auth;



class PatientView extends Component
{

    public $diseasesshort = array(
        "NS" => " Nephrotic Syndrome",
        "CKD" => "Chronic Kidney Disease",
        "AKI" => "Acute Kidney Injury",
        "AGN" => "Acute Glomerulonephritis",
        "SLE" => "Systemic Lupus Erythematosus",
        "IGA" => "IgA nephropathy",
        "CAK" => "Congenital Anomalies of the Kidney and Urinary Tract",
        "UTI" => "Urinary Tract Infections",
        "RCD" => "Renal Calculus Disease",
    );


    
    public function render(Request $request)
    {
        $url =url()->current();
        $patientIDfromURL = request()->pid;


        


        $patientdetails = Patient_basic_dermographic::where('patient_id', $patientIDfromURL )->first();
        $patientparams = Patient_Basic_Params::where('patient_id', $patientIDfromURL )->latest('date_of_parameters')->first();

        $diseasedetails = DiseasePatterns2::where('patient_id', $patientIDfromURL)->get();

        $diseasedetailscount = $diseasedetails->count();

        $userlocationhospitaltext = Keys_and_values::where('valuesofthekey', $patientdetails->healthInstitution_Number)->first(['option as userlocationhospitalid']);


        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "PageView";
        $newuserlog->Data_Set     = "Patient_View:". $patientIDfromURL;
        $newuserlog->save();


        
        if (Auth::user()->access_to_globalsearch == 0) {
            if (Auth::user()->hospital !== $patientdetails->healthInstitution_Number) {
                $newuserlog = new DataLogAll();
                $newuserlog->user_id = Auth::id();
                $newuserlog->log_catergory     = "Access_Denied";
                $newuserlog->Data_Set     = "Page:Patient_View,Reason:NO_access_to_globalsearch,Patient_ID:" . $patientIDfromURL;
                $newuserlog->save();


            abort(500);

            





        }}



        return view('livewire.app.patient-view', ['patientIDfromURL' => $patientIDfromURL , 'patientdetails' => $patientdetails, 'diseasedetailscount' => $diseasedetailscount, 'patientparams' => $patientparams, 'userlocationhospitaltext' => $userlocationhospitaltext] );
    }
}