<?php

namespace App\Http\Livewire;

use App\Models\notes;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public function render()
    {
        $notes = notes::ORDERBY('id', 'DESC')->paginate(6);
        if (!Auth::check()) {
            return redirect()->back();
        } else {
            return view('livewire.index', compact('notes'))->layout('livewire.root');
    }
}
}
