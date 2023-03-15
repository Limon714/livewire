<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Submitform extends Component
{   public  $mess;
    public function submit(){
    $this->mess="Form submitted successfully";
    }
    public function render()
    {
        return view('livewire.submitform');
    }
}
