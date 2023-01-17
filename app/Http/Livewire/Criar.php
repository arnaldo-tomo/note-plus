<?php

namespace App\Http\Livewire;

use App\Models\notes;
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
        //on form submit validation
        $this->validate([
            'user_id' => 'required|unique:users', //students = table name
            'title' => 'required',
            'remenber' => 'required|date',
            'description' => 'required|string',
            'priority' => 'required|numeric',
        ]);

        $notes = new notes();
        $notes->user_id = auth()->user()->id;
        $notes->title = $this->title;
        $notes->remenber = $this->remenber;
        $notes->description = $this->icon;
        $notes->priority = $this->priority;
        $notes->save();

        session()->flash('message', 'New student has been added successfully');
    }
}
