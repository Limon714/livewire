<?php

namespace App\Http\Livewire;

use App\Models\product;
use Livewire\Component;

class ProductSearch extends Component
{     public     $search;
      public function render()
    {
        $products=Product::where('name','like', "%{$this->search}%")->get();
        return view('livewire.product-search', ['products' => $products]);
    }

//Ajax    Request

public function updateSearch(){
$this->emit('Search-Updated');
}

public function mount()
{
$this->search = request()->query('search',$this->search);
}

}
