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
    public function render()
    {
        $notes = notes::paginate(2);
        if (!Auth::check()) {
            return redirect()->back();
        } else {
            return view('livewire.index', compact('notes'))->layout('livewire.root');
    }
}
}
