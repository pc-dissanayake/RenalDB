<?php

namespace App\Http\Livewire\App\Dx;

use Livewire\Component;
use App\Models\DiseasePatterns2;

class Uti extends Component
{
    public function render()
    {

        $url = url()->current();
        $patientIDfromURL = request()->pid;

        $diseasedetails = DiseasePatterns2::where('patient_id', $patientIDfromURL)->where('disease', "UTI")->latest('created_at')->first();

        return view('livewire.app.dx.uti', ['diseasedetails' => $diseasedetails]);
    }
}