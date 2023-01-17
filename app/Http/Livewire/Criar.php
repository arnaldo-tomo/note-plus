<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Criar extends Component
{
    
    public function render()
    {
        $sms = User::all();
        return view('livewire.criar', compact('sms'))->layout('livewire.root');
    }
}
