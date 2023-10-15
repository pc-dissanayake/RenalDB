<?php

namespace App\Http\Livewire\App\Dx;

use Livewire\Component;
use App\Models\DiseasePatterns2;
use Symfony\Component\HttpFoundation\Request;

class Agn extends Component
{
    public function render()
    {
        $url = url()->current();
        $patientIDfromURL = request()->pid;

        $diseasedetails = DiseasePatterns2::where('patient_id', $patientIDfromURL)->where('disease', "AGN")->latest('created_at')->first();

        return view('livewire.app.dx.agn', ['diseasedetails' => $diseasedetails]);

    }
}