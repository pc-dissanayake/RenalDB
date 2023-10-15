<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Dashboard extends Component
{
    public $user;

        public function mount(){

        $user = auth()->user();
        if ($user->user_level == "user") {

            return response(view('errors.403'), 403);
        }

}
    public function render()
    {
        $user = auth()->user();
        if ($user->user_level == "user") {
            Auth::logout();
            return redirect('/login');
        }
        
        return view('livewire.admin.dashboard', ['user_level'=> $this->user ]);
    }
}