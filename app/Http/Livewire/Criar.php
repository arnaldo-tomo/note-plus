<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\notes;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Criar extends Component
{
    public $user_id, $title, $description, $remenber, $icon, $priority;
    public $updateMode = false;
    
    public function render()
    {
        return view('livewire.criar')->layout('livewire.root');
    }
    public function clear()
    {
        $this->priority = "";
    }
    protected $rules = [
        'title' => 'required',
        'remenber' => 'required',
        'icon' => 'required',
        'description' => 'required',
        'priority' => 'required ',
    ];
    public function storenotes()
    {
        $this->validate();

        $this->rules;

        $notes = new notes();
        $notes->user_id = Auth::user()->id;
        $notes->title = $this->title;
        $notes->remenber = $this->remenber;
        $notes->icon = $this->icon;
        $notes->description = $this->description;
        $notes->priority = $this->priority;
        $notes->save();
        session()->flash('message', 'New student has been added successfully');
        redirect()->to('index');
    }

   
}
