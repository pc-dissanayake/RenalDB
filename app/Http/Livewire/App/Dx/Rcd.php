<?php

namespace App\Http\Livewire\App\Dx;

use Livewire\Component;
use App\Models\DiseasePatterns2;


class RCD extends Component
{
    public function render()
    {
        $url = url()->current();
        $patientIDfromURL = request()->pid;

        $diseasedetails = DiseasePatterns2::where('patient_id', $patientIDfromURL)->where('disease', "RCD")->latest('created_at')->first();

        return view('livewire.app.dx.rcd', ['diseasedetails' => $diseasedetails]);
    }
}