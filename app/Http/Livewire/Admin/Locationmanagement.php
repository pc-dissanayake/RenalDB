<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Keys_and_values;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Locationmanagement extends Component
{

    public    $showmodel = 0;
    public    $editmode = 0;

    public    $locationPatientPrefex = '';
    public    $locationID = '';
    public    $locationname = '';

      


    public    $usercountall = [];
    public    $hospitallocations = [];

    private function clearAll(){


        $this->locationPatientPrefex = '';
        $this->locationID = '';
        $this->locationname = '';
        
       


    }

private function LoadAll(){


       $this->hospitallocations = Keys_and_values::where('keysofthekeygroup', 'healthinstitutionsgroup')->get();
        
        $this->usercountall = [];

        foreach ($this->hospitallocations as $value) {

            $count = count(User::where('hospital', $value->valuesofthekey)->get());
            $this->usercountall[$value->valuesofthekey] = $count; 

        }


    }




    public function clicktoshowmodel($editmodesent, $locationidsent=null)
    {            
        if($editmodesent==0){
        $this->clearAll();
        $this->editmode =0;
        //add new
        }else{
            $this->editmode = 1;
            $this->locationID = $locationidsent;

            $dataload =  Keys_and_values::where('keysofthekeygroup','healthinstitutionsgroup')->where('valuesofthekey', $locationidsent)->first();

        $this->locationPatientPrefex = $dataload->patientID_prefix ;
        $this->locationID = $dataload->valuesofthekey ;
        $this->locationname = $dataload->option;
        //dd($this->locationname);
            //load data to edit 
        }
        $this->showmodel = 1;

        
    }
    public function addeditdata()
    {
        if($this->editmode==1){
            //edit
            $dataedited =  Keys_and_values::where('keysofthekeygroup', 'healthinstitutionsgroup')->where('valuesofthekey', $this->locationID)->first();

            $dataedited->option= $this->locationname;
            $dataedited->patientID_prefix= $this->locationPatientPrefex;

            $dataedited->save();
            if($dataedited) {
                $this->clearAll();
                $this->showmodel = 0;
            }

        }else{
            //addnew

            $this->validate();

            // Execution doesn't reach here if validation fails.


            $addnewdata = new Keys_and_values;

            $addnewdata->option = $this->locationname;
            $addnewdata->patientID_prefix = $this->locationPatientPrefex;
            $addnewdata->valuesofthekey = $this->locationID;
            $addnewdata->keysofthekeygroup = 'healthinstitutionsgroup';
            $addnewdata->keysofthekey = 'healthinstitutionnumber';

            $addnewdata->save();

            if ($addnewdata)  
            {
                $this->clearAll();
                $this->LoadAll();
        $this->showmodel = 0;}

        }

    }
protected $rules = [
        'locationname' => 'required',
        'locationPatientPrefex' => 'required',
        'locationID' => 'required',
    ];


    public function mount()
    {
        $this->clearAll();
        $this->LoadAll();
        $arr = array(1, 2, 3, 4);
//print_r(Auth::user()->user_level);



        if(Auth::user()->user_level !== 'SuperAdmin'){
            abort(500);
        }


    }
    public function render()
    {

        $user = auth()->user();
        if ($user->user_level !== 'SuperAdmin') {
            Auth::logout();
            return redirect('/login');
        }

        $this->LoadAll();
        
        return view('livewire.admin.locationmanagement',['hospitallocations'=> $this->hospitallocations]);
    }
}