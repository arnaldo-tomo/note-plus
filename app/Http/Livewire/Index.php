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
        if (!Auth::check()) {
            return redirect()->back();
        } else {
            $notes = notes::ORDERBY('id', 'DESC')->paginate(4);
            return view('livewire.index', compact('notes'))->layout('livewire.root');
    }
}
}
