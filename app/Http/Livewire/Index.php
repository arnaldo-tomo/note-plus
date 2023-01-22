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
    public $user_idVER, $title_ver,  $description_ver, $remenberVER, $iconVER, $priorityVER;
    public $idDelete, $titleDelete;
    public $editarTitle, $editarID, $editarDescription;
    public $atualizarTitle, $atualizarDescription;
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
    public function limpar()
    {
        $this->idDelete = "";
    }

    public function ver($id)
    {
        $notes = notes::where('id', $id)->first();
        $this->title_ver = $notes->title;
        $this->description_ver = $notes->description;
        $this->dispatchBrowserEvent('new-note');
    }

    public function confirmarDelete($id)
    {
        $notes = notes::find($id);
        $this->idDelete = $notes->id;
        $this->titleDelete = $notes->title;
        $this->dispatchBrowserEvent('confirmarDelete');
    }

    public function editar($id)
    {
        $notes = notes::find($id);
        $this->editarID = $notes->id;
        $this->editarTitle = $notes->title;
        $this->editarDescription = $notes->description;
        $this->dispatchBrowserEvent('modaleditar');
    }

    public function delete($id)
    {
        $notes = notes::find($id);
        $notes->delete();
        $this->limpar();
        $this->dispatchBrowserEvent('deletado');
        
    }

    public function atualizar()
    {
    }

}
