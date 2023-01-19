<?php

namespace App\Http\Livewire;

use App\Models\notes;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        if (!Auth::check()) {
            return redirect()->back();
        } else {
            $notes = notes::all();
            return view('livewire.index', compact('notes'))->layout('livewire.root');
    }
}
}
