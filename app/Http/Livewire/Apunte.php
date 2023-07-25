<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class Apunte extends Component
{
    public $note= "";
    public $feedback = "";

    public function store(){
        Note::create([
            'content' => $this->note,
        ]);
        $this->feedback= "Note Created";
    }

    public function update($id){
        $notetoUpdate = Note::find($id);
        $notetoUpdate->content = $this->note;
        $notetoUpdate->save();
        $this->feedback = "Note update";
    }

    public function destroy($id){

        Note::destroy($id);
        $this->feedback = "Note deleted";
    }

    public function render()
    {
        $notes = Note::all();
        return view('livewire.apunte', compact('notes'));
    }
}
