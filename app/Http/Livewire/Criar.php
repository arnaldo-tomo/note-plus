<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Criar extends Component
{
    
    public function render()
    {

        return view('livewire.criar')->layout('livewire.root');
    }
}
