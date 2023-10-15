<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use App\Models\DataLogAll;
use Illuminate\Support\Facades\Auth;


class Contact extends Component
{
    public function render()
    {

        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "PageView";
        $newuserlog->Data_Set     = "Contact";
        $newuserlog->save();


        return view('livewire.app.contact');
    }
}