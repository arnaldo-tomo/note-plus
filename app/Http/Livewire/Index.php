<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        if (!Auth::check()) {
            return redirect()->back();
        } else {
        return view('livewire.index')->layout('livewire.root');
    }
}
}
