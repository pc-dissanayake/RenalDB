<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use App\Models\User;
use App\Models\Patient_basic_dermographic;
use App\Models\Keys_and_values;
use App\Models\DataLogAll;
use Illuminate\Support\Facades\Auth;

class DashboardWelcome extends Component
{
    public function render()
    {

         $countpatients = 0;
         $countusers = 0;
         
        if (Auth::user()->user_level == 'SuperAdmin') {
            $countpatients = count(Patient_basic_dermographic::all());

            $countusers = count(User::all());

        }else{
            $countpatients = count(Patient_basic_dermographic::where('healthInstitution_Number', Auth::user()->hospital)->get());

            $countusers = count(User::where('hospital', Auth::user()->hospital)->get());


            //
        }
    
        


    $institutionsandplaces = Keys_and_values::where('keysofthekeygroup', 'healthinstitutionsgroup')->get();
            $countplaces = count($institutionsandplaces);

            $institutionslist2 = array();
        foreach ($institutionsandplaces as $singleone) {

            $institutionslist2[$singleone->valuesofthekey] = $singleone->option;
        }



        $newuserlog = new DataLogAll();

        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "PageView";
        $newuserlog->Data_Set     = "Dashboard";
        $newuserlog->save();

        return view('livewire.app.dashboard-welcome',['countpatients'=> $countpatients, 'countusers'=> $countusers, 'countplaces'=> $countplaces, 'institutionslist'=> $institutionslist2, ]);
    }
}