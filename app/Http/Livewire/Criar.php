<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Criar extends Component
{
    public $user_id, $title, $description, $remenber, $icon, $priority;
    
    public function render()
    {
        return view('livewire.criar')->layout('livewire.root');
    }

    public function storenotes()
    {
        dd($this->title);
    }
}
