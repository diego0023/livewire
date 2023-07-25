<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public $newCommnet;

    public $comments = [
        [
            "body" => "example text",
            "created_at" => "1 min ago",
            "creator" => "diego",
        ]

    ];


    public function addComment(){

        array_unshift($this->comments, [
            'body' => $this->newCommnet,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'diego'
        ]);

        $this->newCommnet = '';
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
