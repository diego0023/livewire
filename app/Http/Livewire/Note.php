<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Note extends Component
{
    public $note = '';

    public function store(){
        Note::create();
    }
    public function render()
    {
        return view('livewire.note');
    }
}
