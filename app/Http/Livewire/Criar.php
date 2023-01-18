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
    public function clear()
    {
        $this->priority = "";
    }

    public function storenotes()
    {
        //on form submit validation
        $this->validate([
            'user_id' => 'required|unique:users', //students = table name
            'title' => 'required|string',
            'remenber' => 'required|date',
            'description' => 'required|string',
            'priority' => 'required|string',
        ]);

        $notes = new notes();
        $notes->user_id = auth()->user()->id;
        $notes->title = $this->title;
        $notes->remenber = $this->remenber;
        $notes->description = $this->icon;
        $notes->priority = $this->priority;
        $notes->save();
        $this->clear();
        session()->flash('message', 'New student has been added successfully');
    }
}
