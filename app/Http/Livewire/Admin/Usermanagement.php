<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Keys_and_values;
use Illuminate\Support\Facades\Auth;

class Usermanagement extends Component
{
    public User $user;

    public $showthemodal = 0;
    public $hospitallist = [];
    public $hospitallist2 = [];
    public $jobtitlelist = [];

    protected $rules = [
        'user.name' => 'required|string|min:6',
        'user.email' => 'required|email',
        'user.hospital' => 'required',
        'user.job_title' => 'required',
        'user.telephone' => 'required',
        'user.access_to_create' => 'required',
        'user.access_to_localsearch' => 'required',
        'user.access_to_globalsearch' => 'required',
        'user.access_to_edit' => 'required',
        'user.user_level' => 'required|string',
        'user.active_user' => 'required',
    ];

    public function mount(){


        $this->user = User::find(Auth::id());

        $this->hospitallist =  Keys_and_values::where('keysofthekeygroup', 'healthinstitutionsgroup')->get();

            foreach ($this->hospitallist as $onething){
                //dd($onething);
            $hospitallist2[$onething->valuesofthekey] = $onething->option;
            }






        $this->jobtitlelist =  Keys_and_values::where('keysofthekeygroup', 'jobTitle')->get();

    }
    public function showmodeltoedit($userID)
    {
        $this->showthemodal = 1;
        $this->clearall();

        $this->user = User::find($userID);





    } private function clearall()
    {
       /*
      model_id
        model_name
        model_email
        model_hospital
        model_telephone
        model_job_title
        model_user_level
        model_active_user
        model_access_to_create
        model_access_to_localsearch
        model_access_to_globalsearch
        model_access_to_edit*/

    }
     public function save()
    {
        $this->validate();
 
        $this->user->save();

        $this->showthemodal = 0;

    }


    public function render()
    {
        $usersoftheapp = '';
        $user = auth()->user();


        if ($user->user_level == "user") {

            return response(view('errors.403'), 403);

        }
        if ($user->user_level == "SuperAdmin")
{        $usersoftheapp = User::all();
} elseif ($user->user_level == "GroupAdmin") {
    
            $usersoftheapp = User::where('hospital',  $user->hospital)->get();
}else{
    $usersoftheapp = "";
}
    


        return view('livewire.admin.usermanagement', ['allusers' => $usersoftheapp, ]);
    }



}