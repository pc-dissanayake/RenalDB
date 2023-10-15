<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use App\Models\Patient_basic_dermographic;
use App\Models\Keys_and_values;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\DataLogAll;

class PatientSearch extends Component
{
    public $entriestext = 'Recent Entries..';



    public $showautocomplete = 0;
    public $showresults = 0;

    public $searchTerm = '';
    public $searchType = '';
    public $searchreset = '';
    public $searchbuttontext = 'Search';
    public $tabledata = [] ;

    public $autocompletelist = [];

    public $institutionslist = array();
    public $institutionslist2 = array();



    public $diseasesshort = array(
        "NS"=> " Nephrotic Syndrome",
        "CKD"=> "Chronic Kidney Disease",
        "AKI"=> "Acute Kidney Injury",
        "AGN"=> "Acute Glomerulonephritis",
        "SLE"=> "Systemic Lupus Erythematosus",
        "IGA"=> "IgA nephropathy",
        "CAK"=> "Congenital Anomalies of the Kidney and Urinary Tract",
        "UTI" => "Urinary Tract Infections",
        "RCD" => "Renal Calculus Disease",
        "OTR"=> "",
    );

    public $districtsAll =  array(
                    ['searchcriteria' => "Ampara", "text" => "Ampara"],
                    ['searchcriteria' => "Anuradhapura", "text" => "Anuradhapura"],
                    ['searchcriteria' => "Badulla", "text" => "Badulla"],
                    ['searchcriteria' => "Batticaola", "text" => "Batticaola"],
                    ['searchcriteria' => "Colombo", "text" => "Colombo"],
                    ['searchcriteria' => "Galle", "text" => "Galle"],
                    ['searchcriteria' => "Gampaha", "text" => "Gampaha"],
                    ['searchcriteria' => "Hambantota", "text" => "Hambantota"],
                    ['searchcriteria' => "Jaffna", "text" => "Jaffna"],
                    ['searchcriteria' => "Kalutara", "text" => "Kalutara"],
                    ['searchcriteria' => "Kandy", "text" => "Kandy"],
                    ['searchcriteria' => "Kegalle", "text" => "Kegalle"],
                    ['searchcriteria' => "Kilinochchi", "text" => "Kilinochchi"],
                    ['searchcriteria' => "Kurunegala", "text" => "Kurunegala"],
                    ['searchcriteria' => "Mannar", "text" => "Mannar"],
                    ['searchcriteria' => "Matale", "text" => "Matale"],
                    ['searchcriteria' => "Matara", "text" => "Matara"],
                    ['searchcriteria' => "Moneragala", "text" => "Moneragala"],
                    ['searchcriteria' => "Mullaithivu", "text" => "Mullaithivu"],
                    ['searchcriteria' => "Nuwara Eliya", "text" => "Nuwara Eliya"],
                    ['searchcriteria' => "Polonnaruwa", "text" => "Polonnaruwa"],
                    ['searchcriteria' => "Puttalam", "text" => "Puttalam"],
                    ['searchcriteria' => "Ratnapura", "text" => "Ratnapura"],
                    ['searchcriteria' => "Trincomalee", "text" => "Trincomalee"],
                    ['searchcriteria' => "Vavuniya", "text" => "Vavuniya"]
                );
    


    public function cleartable(){

         $this->tabledata = [];
         
    }

    private function getAutocompletetoShow (){

        $this->entriestext = "Search Results..";

        $this->showautocomplete = 0;
        $this->showresults = 0;

        switch ($this->searchType) {
            case "ID":

                break;
            case "Diagnosis":
                $this->showautocomplete = 1;
                $this->showautocompletelist();
                break;
            case "Age":

                break;
            case "Gender":
                $this->showautocomplete = 1;
                $this->showautocompletelist();
                break;

            case "Institution":
                $this->showautocomplete = 1;
                $this->showautocompletelist();
                break;

            case "District":
                $this->showautocomplete = 1;
                $this->showautocompletelist();
                break;

            default:
                session()->flash('errorterms', 'Search terms are not set. Select one of the appropriate..');
           
        }



    }


    public function clickedsearchtext()
    {

        $this->entriestext="Search Results..";
        $this->getAutocompletetoShow();
    }
    public function updatingSearchTerm()
    {
        $this->entriestext = "Search Results..";

        $this->getAutocompletetoShow();

    }







    public function autolistonindividualitemclick($searchitem){
        $this->cleartable();
        $this->entriestext = "Search Results..";

        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "Search";
        $newuserlog->Data_Set     = "Autolist_Click,searchitem:". $searchitem . ",searchType:" . $this->searchType;
        $newuserlog->save();



        switch ($this->searchType) {
            case "ID":

                break;
            case "Diagnosis":
                $this->searchTerm = $this->diseasesshort[$searchitem];
                $this->tabledata =
                Patient_basic_dermographic::where('patient_primary_diagnosis', 'LIKE', $searchitem)
                    ->get();
                $countresults = $this->tabledata->count();
                $this->autocompletelist =[];
                $this->showautocomplete = 0;
                $this->showresults = 1;

                
                break;
            // case "Age":

            //     break;
            case "Gender":
                $this->searchTerm = $searchitem;
                $this->tabledata =
                    Patient_basic_dermographic::where('patient_gender', 'LIKE', $searchitem)
                    ->get();
                $countresults = $this->tabledata->count();
                $this->autocompletelist = [];
                $this->showautocomplete = 0;
                $this->showresults = 1;
                
                break;

            case "Institution":
                $foundarrayno=0;

                foreach( $this->institutionslist as $k => $singleinstitute){
                 $serchval = in_array($searchitem, $singleinstitute);
                 if($serchval !== false)   $foundarrayno= $k;

                }
                  $this->searchTerm = $this->institutionslist[$foundarrayno]['text'];
                //dd($foundarrayno);
                $this->tabledata =
                    Patient_basic_dermographic::where('healthInstitution_Number', 'LIKE', $searchitem)
                    ->get();
                $countresults = $this->tabledata->count();
                $this->autocompletelist = [];
                $this->showautocomplete = 0;
                $this->showresults = 1;
                break;

            case "District":
                $this->searchTerm = $searchitem;
                $this->tabledata =
                    Patient_basic_dermographic::where('patient_geographics_district', 'LIKE', $searchitem)
                    ->get();
                $countresults = $this->tabledata->count();
                $this->autocompletelist = [];
                $this->showautocomplete = 0;
                $this->showresults = 1;
                break;

            default:
        }
    }
    public function showautocompletelist(){
        $this->entriestext = "Search Results..";

        switch ($this->searchType) {
            case "ID":

                break;
            case "Diagnosis":
 $this->autocompletelist =  array(
                    ['searchcriteria'=> "NS", "text"=> "Nephrotic Syndrome"],
                    [ 'searchcriteria' => "CKD" , "text" => "Chronic Kidney Disease"],
                    [ 'searchcriteria' => "AKI" , "text" => "Acute Kidney Injury"],
                    [ 'searchcriteria' => "AGN" , "text" => "Acute Glomerulonephritis"],
                    [ 'searchcriteria' => "SLE" , "text" => "Systemic Lupus Erythematosus"],
                    [ 'searchcriteria' => "IGA" , "text" => "IgA nephropathy"],
                    [ 'searchcriteria' => "CAK" , "text" => "Congenital Anomalies of the Kidney and Urinary Tract"],
                    [ 'searchcriteria' => "UTI" , "text" => "Urinary Tract Infections"],
                    [ 'searchcriteria' => "RCD" , "text" => "Renal Calculus Disease"],
 ) ;

                $this->showautocomplete = 1;

                break;
            case "Age":

                break;
            case "Gender":
                $this->autocompletelist =  array(
                    ['searchcriteria' => "Female", "text" => "Female"],
                    ['searchcriteria' => "Male", "text" => "Male"]
                );

                $this->showautocomplete = 1;
                break;

            case "Institution":
                $this->autocompletelist = $this->institutionslist;
                
                break;

            case "District":

                $this->autocompletelist =  array(
                    ['searchcriteria' => "Ampara", "text" => "Ampara"],
                    ['searchcriteria' => "Anuradhapura", "text" => "Anuradhapura"],
                    ['searchcriteria' => "Badulla", "text" => "Badulla"],
                    ['searchcriteria' => "Batticaola", "text" => "Batticaola"],
                    ['searchcriteria' => "Colombo", "text" => "Colombo"],
                    ['searchcriteria' => "Galle", "text" => "Galle"],
                    ['searchcriteria' => "Gampaha", "text" => "Gampaha"],
                    ['searchcriteria' => "Hambantota", "text" => "Hambantota"],
                    ['searchcriteria' => "Jaffna", "text" => "Jaffna"],
                    ['searchcriteria' => "Kalutara", "text" => "Kalutara"],
                    ['searchcriteria' => "Kandy", "text" => "Kandy"],
                    ['searchcriteria' => "Kegalle", "text" => "Kegalle"],
                    ['searchcriteria' => "Kilinochchi", "text" => "Kilinochchi"],
                    ['searchcriteria' => "Kurunegala", "text" => "Kurunegala"],
                    ['searchcriteria' => "Mannar", "text" => "Mannar"],
                    ['searchcriteria' => "Matale", "text" => "Matale"],
                    ['searchcriteria' => "Matara", "text" => "Matara"],
                    ['searchcriteria' => "Moneragala", "text" => "Moneragala"],
                    ['searchcriteria' => "Mullaithivu", "text" => "Mullaithivu"],
                    ['searchcriteria' => "Nuwara Eliya", "text" => "Nuwara Eliya"],
                    ['searchcriteria' => "Polonnaruwa", "text" => "Polonnaruwa"],
                    ['searchcriteria' => "Puttalam", "text" => "Puttalam"],
                    ['searchcriteria' => "Ratnapura", "text" => "Ratnapura"],
                    ['searchcriteria' => "Trincomalee", "text" => "Trincomalee"],
                    ['searchcriteria' => "Vavuniya", "text" => "Vavuniya"]
                );
                break;

            default:

        
    }
}




    private function Validatethething(){
        $this->entriestext = "Search Results..";

        switch ($this->searchType) {
            case "ID":
                if(strlen($this->searchTerm>=2)){
                    return true;
                } 
                break;
            case "Diagnosis":
                $this->showautocomplete = 1;
                $this->showresults = 0;
                if($this->searchTerm ==null || $this->searchTerm =='' ){                
                $this->showautocompletelist();}
                else{
                return true;
                }
                    

                break; 
                case "Age":
                if (is_numeric($this->searchTerm)) {
                    if ($this->searchTerm >= 0) {
                        return true;
                     }else{
                        session()->flash('showerrormessage', 'Enter the age in number greater than 0');
                    }
                }else{
                    session()->flash('showerrormessage', 'Enter the age in number greater than 0');
                }
                break; 
                case "Gender":
                if (strlen($this->searchTerm =='Male' || $this->searchTerm =='Female')) {
                    return true;
                } 
                break;
 
                case "Institution":

                $foundarrayno = 0;

                foreach ($this->institutionslist as $k => $singleinstitute) {
                    $serchval = in_array($this->searchTerm, $singleinstitute, TRUE);
                    if ($serchval !== false)   $foundarrayno = $k;
                }
                if ($foundarrayno !== false) {
                    return true;
                } else {
                    session()->flash('errorserchstring', 'Invalid Istitution..');
                    session()->flash('showerrormessage', 'Invalid Istitution..');
                }
                break;
 
                case "District":
                $serchval = array_search($this->searchTerm, $this->districtsAll);
                    if($serchval==true){
                        return true;
                    }else{
                    session()->flash('errorserchstring', 'Invalid District..');
                    session()->flash('showerrormessage', 'Invalid District..');
                    }

                break;
 
            default:
                session()->flash('errorterms', 'Search terms are not set. Select one of the appropriate..');
                session()->flash('showerrormessage', 'Search terms are not set. Select one of the appropriate..');
        }

    }
    public function searchThemAll(){
        $this->entriestext = "Search Results..";

// hide the damm all things
     $this->showautocomplete = 0;
     $this->showresults = 0;
        $this->cleartable();
        // validate
        
$countresults =0;

if( $this->Validatethething()==true){

            $newuserlog = new DataLogAll();
            $newuserlog->user_id = Auth::id();
            $newuserlog->log_catergory     = "Search";
            $newuserlog->Data_Set     = "SearchBtn_Click,searchitem:" . $this->searchTerm . "searchType:" . $this->searchType;
            $newuserlog->save();


        if ($this->searchType == 'ID'){
            $this->tabledata = 
            Patient_basic_dermographic::where('patient_id', 'LIKE', '%' . $this->searchTerm . '%')
                                        ->orWhere('institution_ID_Number', 'LIKE', '%' . $this->searchTerm . '%')
                                        ->get();
                $countresults = $this->tabledata->count();
                $this->autocompletelist = [];
                $this->showautocomplete = 0;
                $this->showresults = 1;
    }elseif ($this->searchType == 'Diagnosis') {
                if ($this->searchTerm == null || $this->searchTerm == '') {
                    $this->showautocompletelist();
                } else {
                        $serchval= array_search($this->searchTerm ,$this->diseasesshort );
                        if($serchval==false){
                        $this->showautocompletelist();
                        $this->showautocomplete = 1;
                        $this->showresults = 0;
                        session()->flash('errorserchstring', '');
                        }else{
                            $this->cleartable();
                        $this->tabledata =
                            Patient_basic_dermographic::where('patient_primary_diagnosis', 'LIKE', $serchval)
                            ->get();
                        $countresults = $this->tabledata->count();
                        $this->autocompletelist = [];
                        $this->showautocomplete = 0;
                        $this->showresults = 1;
                        }
                    }
}elseif ($this->searchType == 'Age') {


               $date1 =  Carbon::now()->subDays(365* $this->searchTerm);
               $ageplus1 = (int)$this->searchTerm+1;
               $date2 =  Carbon::now()->subDays(365* $ageplus1);
              // dd($date1, $date2,$ageplus1);

                $this->cleartable();
                $this->tabledata = 
                    Patient_basic_dermographic::whereBetween('patient_birthday', [$date2, $date1])
                    ->get();
                $countresults = $this->tabledata->count();
                $this->autocompletelist = [];
                $this->showautocomplete = 0;
                $this->showresults = 1;


                

}elseif ($this->searchType == 'Gender') {

}elseif ($this->searchType == 'Institution') {

    

}elseif ($this->searchType == 'District') {
                $this->cleartable();
                $this->tabledata =
                    Patient_basic_dermographic::where('patient_geographics_district', 'LIKE', '%'.$this->searchTerm. '%')
                    ->get();
                $countresults = $this->tabledata->count();
                $this->autocompletelist = [];
                $this->showautocomplete = 0;
                $this->showresults = 1;

                
}else {
   // $this->showerrormessage = 1;
            session()->flash('errorterms', 'Search terms are not set. Select one of the appropriate..');
            session()->flash('showerrormessage', 'Search terms are not set. Select one of the appropriate..');

           
}
}




        
    }


    
    public function mount()
    {
        //create institute list
        $this->institutionslist =[];
   //                    ['searchcriteria' => "Vavuniya", "text" => "Vavuniya"]
     
$listofallinstitutes = Keys_and_values::where('keysofthekeygroup', 'LIKE', 'healthinstitutionsgroup')->get(['option', 'valuesofthekey']);
foreach ( $listofallinstitutes as $singleone){

            $a = array ('searchcriteria' =>  $singleone->valuesofthekey, "text" => $singleone->option) ;
            array_push($this->institutionslist, $a);
            $this->institutionslist2[$singleone->valuesofthekey] = $singleone->option;
}

            $this->showautocomplete = 0;

        if ($this->searchTerm == "" or $this->searchTerm == null) {
            //searchTerm not set
            $this->showresults = 1;
            if (auth()->user()->user_level == "SuperAdmin")
            $this->tabledata = Patient_basic_dermographic::latest()->take(50)->get();
            else {
                $this->tabledata = Patient_basic_dermographic::where('healthInstitution_Number', '=', auth()->user()->hospital)->latest()->take(10)->get();
            }

    }

        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "PageView";
        $newuserlog->Data_Set     = "Patient_Search";
        $newuserlog->save();
}
       public function render()
    {
        if (Auth::user()->access_to_localsearch == 0) {
            $newuserlog = new DataLogAll();
            $newuserlog->user_id = Auth::id();
            $newuserlog->log_catergory     = "Access_Denied";
            $newuserlog->Data_Set     = "Page:Patient_Search,Reason:NO_access_to_localsearch";
            $newuserlog->save();


            abort(500);
        }

        return view('livewire.app.patient-search',['tabledata'=>$this->tabledata ]);
    }

}