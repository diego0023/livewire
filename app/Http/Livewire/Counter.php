<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $username = '';

    // se ejecuta al pintar el componente
    public function mount(){
        $this->fill(['count' => 20]);
    }

    public function increment(){
        $this->count++;
    }

    public function decrement(){
        $this->count--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
