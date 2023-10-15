<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use App\Models\Patient_basic_dermographic;
use App\Models\Patient_Basic_Params;
use Carbon\Carbon;

use App\Models\DataLogAll;
use Illuminate\Support\Facades\Auth;



class PatientGrowth extends Component
{
    public $patientdetails , $patientparameters, $patientparameterswithtrashed =[] ;

    public $modalststus = 0;
    public $modaleditststus = 0;

    public $show_view = 'Timeline';

    public $patientIDfromURL = '';

    public $patient_birthday = '';
    public $patient_age = '';

    public $modeldate = '';
    public $modelage = '';
    public $patient_parameter_model_height = '';
    public $patient_parameter_model_weight = '';

    public $modelidtoedit = '';

    protected $rules = [
        'modeldate' => 'required|date',
        'patient_parameter_model_height' => 'required|numeric|min:30|max:400',
        'patient_parameter_model_weight' => 'required|numeric|min:1|max:400',
    ];
   


public function updatedModeldate($value){
//calculate age
$this->modelage = Carbon::createFromDate($this->patient_birthday)->diff(\Carbon\Carbon::createFromDate($this->modeldate))->format('%y years and %m months');
}

    public function DismissThisModel(){
        $this->modalststus = 0;

    }


    public function modelforparams($state, $id = null){
            
    // if  state is new clear text fields
        if($state == 'add'){            
            $this->clearmodal();
    $this->modaleditststus = 0;
            $this->modalststus = 1;

        }elseif($state =='edit'){
            $this->clearmodal();
            // load parameters
            $this->modaleditststus = 1;
            $this->modalststus = 1;
            $this->modelidtoedit = $id;

            $BasicParams = Patient_Basic_Params::find($id);
            

            $this->modeldate = $BasicParams->date_of_parameters ;
            $this->patient_parameter_model_height = $BasicParams->patient_height ;
            $this->patient_parameter_model_weight = $BasicParams->patient_weight ;
            $this->modelage = Carbon::createFromDate($this->patient_birthday)->diff(\Carbon\Carbon::createFromDate($this->modeldate))->format('%y years and %m months');


            $newuserlog = new DataLogAll();
            $newuserlog->user_id = Auth::id();
            $newuserlog->log_catergory     = "Edit_Growth_Parameters";
            $newuserlog->Data_Set     = "Old_Data:" . (string)$BasicParams;
            $newuserlog->save();


        }

    }

    public function refreshpatientparameters()
    {
        $this->patientparameters = Patient_Basic_Params::where('patient_id', $this->patientIDfromURL)->orderBy('date_of_parameters', 'Asc')->get();
        $this->patientparameterswithtrashed = Patient_Basic_Params::where('patient_id', $this->patientIDfromURL)->withTrashed()->orderBy('date_of_parameters', 'Asc')->get();

    }


    public function mount()
    {
        $this->patientIDfromURL = request()->pid;


        $this->patientdetails = Patient_basic_dermographic::where('patient_id', $this->patientIDfromURL)->first();

        $this->patientparameters = Patient_Basic_Params::where('patient_id', $this->patientIDfromURL)->orderBy('date_of_parameters', 'Asc')->get();
        $this->patientparameterswithtrashed = Patient_Basic_Params::where('patient_id', $this->patientIDfromURL)->withTrashed()->orderBy('date_of_parameters', 'Asc')->get();


        $this->patient_birthday = $this->patientdetails->patient_birthday;

        $this->refreshpatientparameters();

        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "PageView";
        $newuserlog->Data_Set     = "Patient_Growth";
        $newuserlog->save();


        
    }    
    
    public function render()
    {

       

        return view('livewire.app.patient-growth', [  ]);
    }

    public function softarchive($id){

        $parametersoftarchive = Patient_Basic_Params::where('id', $id )->where('patient_id', $this->patientIDfromURL)->withTrashed()->first();
        
        if($parametersoftarchive ->deleted_at == null){
            // delete
            $parametersoftarchive->delete();
        }else{
            //resotore
            $parametersoftarchive->restore();
        }

        $this->refreshpatientparameters();


    }
    public function submitParametersNew(){
        $this->validate();
 $parameter = new Patient_Basic_Params;

            $parameter->patient_id = $this->patientIDfromURL;
            $parameter->date_of_parameters = $this->modeldate;
            $parameter->patient_height = round($this->patient_parameter_model_height, 2);
            $parameter->patient_weight = round($this->patient_parameter_model_weight, 3);

            $parameter->save();

            if (!$parameter) {
               // App::abort(500, 'Error');
            }else{
                    $this->DismissThisModel();
            $newuserlog = new DataLogAll();
            $newuserlog->user_id = Auth::id();
            $newuserlog->log_catergory     = "Add_Growth_Parameters";
            $newuserlog->Data_Set     = "Add_Data:" . (string)$parameter;
            $newuserlog->save();

            }


    }
    public function submitParametersEdit(){
        ///if not new parameter update

            $this->validate();

            $parameteredit = Patient_Basic_Params::where('id', $this->modelidtoedit)->where('patient_id',$this->patientIDfromURL)->first();

        $parameteredit->date_of_parameters = $this->modeldate;
        $parameteredit->patient_height = round($this->patient_parameter_model_height, 2);
        $parameteredit->patient_weight = round($this->patient_parameter_model_weight, 3);

        $parameteredit->save();
        
        if (!$parameteredit) {
            // App::abort(500, 'Error');
        } else {
            $this->DismissThisModel();
            $newuserlog = new DataLogAll();
            $newuserlog->user_id = Auth::id();
            $newuserlog->log_catergory     = "Edit_Growth_Parameters";
            $newuserlog->Data_Set     = "New_Data:". (string)$parameteredit;
            $newuserlog->save();
        }
    }
    
    private function clearmodal()
    {


        $this->modelidtoedit  = '';
        $this->modeldate  = '';
        $this->modelage  = '';
        $this->patient_parameter_model_height  = '';
        $this->patient_parameter_model_weight = '';

    }
    






















































/*
    public function refreshpatientparameters(){

        
        $this->patientparameters = Patient_Basic_Params::where('patient_id', $this->patientIDfromURL)->orderBy('date_of_parameters', 'Asc')->get();


    }
    public function mount(){


        $url = url()->current();
        $this->patientIDfromURL = request()->pid;


        $this->patientdetails = Patient_basic_dermographic::where('patient_id', $this->patientIDfromURL)->first();

        $this->patientparameters = Patient_Basic_Params::where('patient_id', $this->patientIDfromURL)->orderBy('date_of_parameters','Asc')->get();


        $this->patient_birthday = $this->patientdetails->patient_birthday;
        


    }





    private function clearmodal(){



         $this->model_date  = '' ;
        $this->patient_parameter_model_height  = '' ;
        $this->patient_parameter_model_height = '';

              $this->refreshpatientparameters();
  
    }
    
    
    public function addparametertoparametertable()
{
        $this->validate();

    
        $patientdata = new Patient_Basic_Params;

        $patientdata->patient_id  = $this->patientIDfromURL;
        $patientdata->date_of_parameters  = date('Y/m/d', strtotime($this->model_date)) ;
        $patientdata->patient_height  = round($this->patient_parameter_model_height, 2) ;
        $patientdata->patient_weight  = round($this->patient_parameter_model_weight, 2) ;

        $patientdata->save();


        $this->refreshpatientparameters();


        if ($patientdata==true){
            $this->clearmodal();
        }


        
        $this->render();

        

}*/

}