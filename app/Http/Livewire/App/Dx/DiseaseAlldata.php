<?php

namespace App\Http\Livewire\App\Dx;

use Livewire\Component;
use App\Models\Patient_basic_dermographic;
use App\Models\DiseasePatterns2;
use App\Models\User;
use App\Models\DataLogAll;
use Illuminate\Support\Facades\Auth;



class DiseaseAlldata extends Component
{


    public $patientIDfromURL ='';



    public function mount(){
        $this->patientIDfromURL = request()->pid;
    }




    public function render()
    {
        $patientbasics = Patient_basic_dermographic::where('patient_id', $this->patientIDfromURL)->first();
        $patientalldiseasedata = DiseasePatterns2::where('patient_id', $this->patientIDfromURL)->orderBy('created_at', 'ASC')->get();



  
        
        return view('livewire.app.dx.disease-alldata',['patientbasics'=> $patientbasics , 'patientalldiseasedata'=> $patientalldiseasedata]);
    }
}