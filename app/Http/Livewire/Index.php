<?php

namespace App\Http\Livewire;

use App\Models\notes;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $user_id, $title, $description, $remenber, $icon, $priority;
    public $updateMode = false;

    public function render()
    {
        $notes = notes::ORDERBY('id', 'DESC')->paginate(6);
        if (!Auth::check()) {
            return redirect()->back();
        } else {
            return view('livewire.index', compact('notes'))->layout('livewire.root');
        }
    }

    public function ver($id)
    {
        $notes = notes::find($id);
        $notes->user_id = Auth::user()->id;
        $notes->title = $this->title;
        $notes->remenber = $this->remenber;
        $notes->icon = $this->icon;
        $notes->description = $this->description;
        $notes->priority = $this->priority;
        $this->dispatchBrowserEvent('new-note2');
        // $this->limpar();

    }

}
