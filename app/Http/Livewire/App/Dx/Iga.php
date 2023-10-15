<?php

namespace App\Http\Livewire\App\Dx;

use Livewire\Component;
use App\Models\DiseasePatterns2;
use Symfony\Component\HttpFoundation\Request;


class Iga extends Component
{
    public function render()
    {
        $url = url()->current();
        $patientIDfromURL = request()->pid;

        $diseasedetails = DiseasePatterns2::where('patient_id', $patientIDfromURL) -> where('disease', "IGA")->latest('created_at')->first();

        return view('livewire.app.dx.iga', ['diseasedetails' => $diseasedetails]);

    }
}