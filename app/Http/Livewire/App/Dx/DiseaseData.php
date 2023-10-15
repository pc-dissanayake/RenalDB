<?php

namespace App\Http\Livewire\App\Dx;

use Livewire\Component;
use Symfony\Component\HttpFoundation\Request;

use App\Models\Patient_basic_dermographic;
use App\Models\Patient_Basic_Params;
use App\Models\DiseasePatterns;
use App\Models\DiseasePatterns2;

use App\Models\DataLogAll;
use Illuminate\Support\Facades\Auth;


class DiseaseData extends Component
{

public $patientprimarydx;
public $patientIDfromURL;


public $Dx_notes;


public $NS_DiseasePattern;
public $NS_Second_line;
public $NS_RenalBiopsy;
public $NS_RenalBiopsy_Dx;
public $NS_OtherComorbids;


public $CAK_DiseasePattern;
public $CAK_pyeloplasty;
public $CAK_megaureter;
public $CAK_VUR_type;
public $CAK_VUR_grade;
public $CAK_VUR_reimp;
public $CAK_last_secreat;
public $CAK_last_egfr;
public $CAK_ckd;



public $CKD_etiology;
public $CKD_stage;
public $CKD_last_secreat;
public $CKD_last_egfr;
public $CKD_donor;
public $CKD_rrt;
public $CKD_transplant;


public $AGN_history;
public $AGN_asot;
public $AGN_high_secreat;
public $AGN_gfr;
public $AGN_macro_heamat;
public $AGN_micro_heamat;
public $AGN_c3;
public $AGN_c4;
public $AGN_bp;
public $AGN_uop;
public $AGN_max_proten;

public $SLE_diagnosis;
public $SLE_drugsused;
public $SLE_last_secreat;
public $SLE_last_egfr;
public $SLE_ckd;
public $SLE_biopsy;


public $IGA_presentation;
public $IGA_heamat;
public $IGA_last_secreat;
public $IGA_last_egfr;
public $IGA_biopsy;
public $IGA_hypertension;
public $IGA_drugs;
public $IGA_ckd;


public $AKI_etio;
public $AKI_rrt;
public $AKI_frusemide;
public $AKI_biopsy;



public $UTI_type;
public $UTI_total_number;
public $UTI_totaladmissions;
public $UTI_numberlastyear;
public $UTI_organisms;
public $UTI_structureabnormalities;
public $UTI_riskfactors;
public $UTI_imaging_and_defects;
public $UTI_Surgical_interventions;
public $UTI_Surgical_reduced_frequency;
public $UTI_Prophylaxis_drug;
public $UTI_Prophylaxis_duration;
public $UTI_Prophylaxis_reduced_frequency;



public $RCD_presentation;
public $RCD_diagnosis;
public $RCD_renal_calculi_side;
public $RCD_renal_calculi_number;
public $RCD_renal_calculi_sizes;
public $RCD_renal_calculi_composition;
public $RCD_renal_calculi_structuraldefects;
public $RCD_riskfactors;
public $RCD_positiveinx;
public $RCD_urine_calcium_creatinine;
public $RCD_urine_uricacid_creatinine;
public $RCD_treatment;
public $RCD_treatment_duration;
public $RCD_treatment_surgical;
public $RCD_outcome;



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
    

/*
*/
public function mount(){

          $url = url()->current();
        $this->patientIDfromURL = request()->pid;  
              $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "Add_Request_Disease_Data";
        $newuserlog->Data_Set     = "Patient_ID:" . $this->patientIDfromURL;
        $newuserlog->save();

}
    
    public function render(Request $request)
    {




        $patientdetails = Patient_basic_dermographic::where('patient_id', $this->patientIDfromURL)->first();
        
        $this->patientprimarydx  = $patientdetails ->patient_primary_diagnosis;

  


        return view('livewire.app.dx.disease-data',  ['patientIDfromURL' => $this->patientIDfromURL, 'patientprimarydx' => $this->patientprimarydx ]);
    }

private function alwaysRedirect (){

        return redirect()->route('patient_management', ['pid' => $this->patientIDfromURL]);

}


    public function saveNS()
    {
        $newdata = new DiseasePatterns2;

        $newdata->patient_id = $this->patientIDfromURL;
        $newdata->notes = $this->Dx_notes;
        $newdata->disease =  "NS";
        $newdata->NS_DiseasePattern = $this->NS_DiseasePattern;
        $newdata->NS_Second_line = json_encode($this->NS_Second_line);
        $newdata->NS_OtherComorbids = json_encode($this->NS_OtherComorbids);
        $newdata->NS_RenalBiopsy = $this->NS_RenalBiopsy;
        $newdata->NS_RenalBiopsy_Dx = $this->NS_RenalBiopsy_Dx;
        $newdata->created_user =    auth()->id();

         $newdata->save();

        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "Add_Request_Disease_Data";
        $newuserlog->Data_Set     = "New_Data:" . $newdata;
        $newuserlog->save();
         
        $this->alwaysRedirect();
        
        return redirect()->route('patient_management', ['pid' => $this->patientIDfromURL]);

    }
    
    public function saveCAK()
    {
        $newdata = new DiseasePatterns2;

        $newdata->patient_id = $this->patientIDfromURL;
        $newdata->notes = $this->Dx_notes;
        $newdata->disease =  "CAK";
        $newdata->CAK_DiseasePattern = $this->CAK_DiseasePattern;
        $newdata->CAK_pyeloplasty = $this->CAK_pyeloplasty;
        $newdata->CAK_megaureter = $this->CAK_megaureter;
        $newdata->CAK_VUR_type = $this->CAK_VUR_type;
        $newdata->CAK_VUR_grade = $this->CAK_VUR_grade;
        $newdata->CAK_VUR_reimp = $this->CAK_VUR_reimp;
        $newdata->CAK_last_secreat = $this->CAK_last_secreat;
        $newdata->CAK_last_egfr = $this->CAK_last_egfr;
        $newdata->CAK_ckd = $this->CAK_ckd;
        $newdata->created_user =    auth()->id();
         $newdata->save();

        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "Add_Request_Disease_Data";
        $newuserlog->Data_Set     = "New_Data:" . $newdata;
        $newuserlog->save();



        $this->alwaysRedirect();
       


        return redirect()->route('patient_management', ['pid' => $this->patientIDfromURL]);

    }
    
    public function saveCKD()
    {
        $newdata = new DiseasePatterns2;

        $newdata->patient_id = $this->patientIDfromURL;
        $newdata->notes = $this->Dx_notes;
        $newdata->disease =  "CKD";
        $newdata->CKD_etiology = $this->CKD_etiology;
        $newdata->CKD_stage = $this->CKD_stage;
        $newdata->CKD_last_secreat = $this->CKD_last_secreat;
        $newdata->CKD_last_egfr = $this->CKD_last_egfr;
        $newdata->CKD_donor = $this->CKD_donor;
        $newdata->CKD_rrt = $this->CKD_rrt;
        $newdata->CKD_transplant = $this->CKD_transplant;
        $newdata->created_user =    auth()->id();

         $newdata->save();
        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "Add_Request_Disease_Data";
        $newuserlog->Data_Set     = "New_Data:" . $newdata;
        $newuserlog->save();
        $this->alwaysRedirect();



        return redirect()->route('patient_management', ['pid' => $this->patientIDfromURL]);

    } public function saveAGN()
    {
        $newdata = new DiseasePatterns2;

        $newdata->patient_id = $this->patientIDfromURL;
        $newdata->notes = $this->Dx_notes;
        $newdata->disease =  "AGN";
        $newdata->AGN_history = $this->AGN_history;
        $newdata->AGN_asot = $this->AGN_asot;
        $newdata->AGN_high_secreat = $this->AGN_high_secreat;
        $newdata->AGN_gfr = $this->AGN_gfr;
        $newdata->AGN_macro_heamat = $this->AGN_macro_heamat;
        $newdata->AGN_micro_heamat = $this->AGN_micro_heamat;
        $newdata->AGN_c3 = $this->AGN_c3;
        $newdata->AGN_c4 = $this->AGN_c4;
        $newdata->AGN_bp = $this->AGN_bp;
        $newdata->AGN_uop = $this->AGN_uop;
        $newdata->AGN_max_proten = $this->AGN_max_proten;
        $newdata->created_user =    auth()->id();

         $newdata->save();
        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "Add_Request_Disease_Data";
        $newuserlog->Data_Set     = "New_Data:" . $newdata;
        $newuserlog->save();
        $this->alwaysRedirect();

        return redirect()->route('patient_management', ['pid' => $this->patientIDfromURL]);

    }

    public function saveSLE()
    {
        $newdata = new DiseasePatterns2;

        $newdata->patient_id = $this->patientIDfromURL;
        $newdata->notes = $this->Dx_notes;
        $newdata->disease =  "SLE";
        $newdata->SLE_diagnosis = json_encode($this->SLE_diagnosis) ;
        $newdata->SLE_drugsused = json_encode($this->SLE_drugsused) ;
        $newdata->SLE_last_secreat = $this->SLE_last_secreat;
        $newdata->SLE_last_egfr = $this->SLE_last_egfr;
        $newdata->SLE_ckd = $this->SLE_ckd;
        $newdata->SLE_biopsy = $this->SLE_biopsy;
        $newdata->created_user =    auth()->id();

         $newdata->save();
        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "Add_Request_Disease_Data";
        $newuserlog->Data_Set     = "New_Data:" . $newdata;
        $newuserlog->save();
        $this->alwaysRedirect();



        return redirect()->route('patient_management', ['pid' => $this->patientIDfromURL]);
    }

    public function saveIGA()
    {
        $newdata = new DiseasePatterns2;

        $newdata->patient_id = $this->patientIDfromURL;
        $newdata->notes = $this->Dx_notes;
        $newdata->disease =  "IGA";
        $newdata->IGA_drugs = json_encode($this->IGA_drugs) ;
        $newdata->IGA_presentation = $this->IGA_presentation;
        $newdata->IGA_heamat = $this->IGA_heamat;
        $newdata->IGA_last_secreat = $this->IGA_last_secreat;
        $newdata->IGA_last_egfr = $this->IGA_last_egfr;
        $newdata->IGA_biopsy = $this->IGA_biopsy;
        $newdata->IGA_hypertension = $this->IGA_hypertension;
        $newdata->IGA_ckd = $this->IGA_ckd;
        $newdata->created_user =    auth()->id();

         $newdata->save();
        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "Add_Request_Disease_Data";
        $newuserlog->Data_Set     = "New_Data:" . $newdata;
        $newuserlog->save();
        $this->alwaysRedirect();


        return redirect()->route('patient_management', ['pid' => $this->patientIDfromURL]);
    }


    public function saveAKI()
    {
        $newdata = new DiseasePatterns2;

        $newdata->patient_id = $this->patientIDfromURL;
        $newdata->notes = $this->Dx_notes;
        $newdata->disease =  "AKI";
        $newdata->AKI_etio = $this->AKI_etio;
        $newdata->AKI_rrt = $this->AKI_rrt;
        $newdata->AKI_frusemide = $this->AKI_frusemide;
        $newdata->AKI_biopsy = $this->AKI_biopsy;
        $newdata->created_user =    auth()->id();
         $newdata->save();
        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "Add_Request_Disease_Data";
        $newuserlog->Data_Set     = "New_Data:" . $newdata;
        $newuserlog->save();
        $this->alwaysRedirect();



        return redirect()->route('patient_management', ['pid' => $this->patientIDfromURL]);
    }

public function saveUTI()
    {
        
        $newdata = new DiseasePatterns2;
        $newdata->patient_id = $this->patientIDfromURL;
        $newdata->notes = $this->Dx_notes;
        $newdata->disease =  "UTI";
        $newdata->UTI_type = $this->UTI_type;
        $newdata->UTI_total_number = $this->UTI_total_number;
        $newdata->UTI_totaladmissions = $this->UTI_totaladmissions;
        $newdata->UTI_numberlastyear = $this->UTI_numberlastyear;
        $newdata->UTI_organisms = $this->UTI_organisms;
        $newdata->UTI_structureabnormalities = json_encode($this->UTI_structureabnormalities);
        $newdata->UTI_riskfactors = json_encode($this->UTI_riskfactors);
        $newdata->UTI_imaging_and_defects = json_encode($this->UTI_imaging_and_defects);
        $newdata->UTI_Surgical_interventions = json_encode($this->UTI_Surgical_interventions);
        $newdata->UTI_Surgical_reduced_frequency = $this->UTI_Surgical_reduced_frequency;
        $newdata->UTI_Prophylaxis_drug = $this->UTI_Prophylaxis_drug;
        $newdata->UTI_Prophylaxis_duration = $this->UTI_Prophylaxis_duration;
        $newdata->UTI_Prophylaxis_reduced_frequency = $this->UTI_Prophylaxis_reduced_frequency;
        $newdata->created_user =    auth()->id();
         $newdata->save();
        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "Add_Request_Disease_Data";
        $newuserlog->Data_Set     = "New_Data:" . $newdata;
        $newuserlog->save();
        $this->alwaysRedirect();
//


        return redirect()->route('patient_management', ['pid' => $this->patientIDfromURL]);
    }
    
    
    
    public function saveRCD()
    {
        
        



        
        
        $newdata = new DiseasePatterns2;
        $newdata->patient_id = $this->patientIDfromURL;
        $newdata->notes = $this->Dx_notes;
        $newdata->disease =  "RCD";
        $newdata->RCD_presentation=$this->RCD_presentation;
$newdata->RCD_diagnosis=$this->RCD_diagnosis;
$newdata->RCD_renal_calculi_side=$this->RCD_renal_calculi_side;
$newdata->RCD_renal_calculi_number=$this->RCD_renal_calculi_number;
$newdata->RCD_renal_calculi_sizes=$this->RCD_renal_calculi_sizes;
$newdata->RCD_renal_calculi_composition=$this->RCD_renal_calculi_composition;
$newdata->RCD_renal_calculi_structuraldefects=$this->RCD_renal_calculi_structuraldefects;
$newdata->RCD_riskfactors= json_encode($this->RCD_riskfactors);
$newdata->RCD_positiveinx=$this->RCD_positiveinx;
$newdata->RCD_urine_calcium_creatinine=$this->RCD_urine_calcium_creatinine;
$newdata->RCD_urine_uricacid_creatinine=$this->RCD_urine_uricacid_creatinine;
$newdata->RCD_treatment=$this->RCD_treatment;
$newdata->RCD_treatment_duration=$this->RCD_treatment_duration;
$newdata->RCD_treatment_surgical=$this->RCD_treatment_surgical;
$newdata->RCD_outcome=$this->RCD_outcome;
        $newdata->created_user =    auth()->id();
         $newdata->save();
        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "Add_Request_Disease_Data";
        $newuserlog->Data_Set     = "New_Data:" . $newdata;
        $newuserlog->save();
        $this->alwaysRedirect();
//


        return redirect()->route('patient_management', ['pid' => $this->patientIDfromURL]);
 }



}