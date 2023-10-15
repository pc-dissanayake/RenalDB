<?php

namespace App\Http\Livewire\App\Dx;

use Livewire\Component;
use App\Models\DiseasePatterns2;
use Symfony\Component\HttpFoundation\Request;

class Ckd extends Component
{
    public function render()
    {
        $url = url()->current();
        $patientIDfromURL = request()->pid;

        $diseasedetails = DiseasePatterns2::where('patient_id', $patientIDfromURL)->where('disease', "CKD")->latest('created_at')->first();

        return view('livewire.app.dx.ckd', ['diseasedetails' => $diseasedetails]);
    }
}