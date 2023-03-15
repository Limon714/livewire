<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $title;
    public $body;
    public function mount(){
    $this->title="Hello Limon";
    $this->body="I am a laravel Developer";
    }
    public function render()
    {
        return view('livewire.post');
    }
}
