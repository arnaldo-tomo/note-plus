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
    public $user_idVER,  $description_ver, $remenberVER, $iconVER, $priorityVER;
    public $title_ver;
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
        $notes = notes::where('id', $id)->first();
        $this->title_ver = $notes->title;
        $notes->title = $this->title_ver;
        $this->description_ver = $notes->description;


        $this->dispatchBrowserEvent('new-note');
    }

}
