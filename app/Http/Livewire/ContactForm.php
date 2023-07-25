<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $emal;
    public $phone;
    public $message;
    public function render()
    {
        return view('livewire.contact-form');
    }
}
