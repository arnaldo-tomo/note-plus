<?php

namespace App\Http\Livewire;

use App\Models\notes;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Lixeira extends Component
{
    use WithPagination;
    public
    public function render()
    {
        $notes = notes::where('user_id', Auth::user()->id)->onlyTrashed()->ORDERBY('id', 'DESC')->paginate(6);
        return view('livewire.lixeira', compact('notes'))->layout('livewire.root');
    }

    public function ver($id)
    {
        $notes = notes::where('id', $id)->first();
        $this->title_ver = $notes->title;
        $this->description_ver = $notes->description;
        $this->dispatchBrowserEvent('new-note');
    }
}
