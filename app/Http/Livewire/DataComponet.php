<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataComponet extends Component
{   public   $message;
    public function render()
    {
        return view('livewire.data-componet');
    }
}
