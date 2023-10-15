<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use App\Models\DataLogAll;
use Illuminate\Support\Facades\Auth;

class Knowledgebase extends Component
{
    public function render()
    {
        $newuserlog = new DataLogAll();
        $newuserlog->user_id = Auth::id();
        $newuserlog->log_catergory     = "PageView";
        $newuserlog->Data_Set     = "Knowledgebase";
        $newuserlog->save();

        return view('livewire.app.knowledgebase');
    }
}