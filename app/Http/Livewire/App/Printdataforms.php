<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use App\Models\DataLogAll;
use Illuminate\Support\Facades\Auth;

class Printdataforms extends Component
{
    public function render()
    {

        $url = url()->current();
        $patientIDfromURL = request()->pid;

        
        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "PageView";
        $newuserlog->Data_Set     = "Print_Data_Forms,Patient_ID:". $patientIDfromURL;
        $newuserlog->save();


        return view('livewire.app.printdataforms',['patientIDfromURL'=> $patientIDfromURL]);
    }
}