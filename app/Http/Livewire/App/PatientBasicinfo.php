<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use App\Models\DataLogAll;
use Illuminate\Support\Facades\Auth;



class PatientBasicinfo extends Component
{
    public function render()
    {
        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "PageView";
        $newuserlog->Data_Set     = "Patient_Basic_Info";
        $newuserlog->save();


        return view('livewire.app.patient-basicinfo');
    }
}