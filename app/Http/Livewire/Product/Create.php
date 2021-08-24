<?php

namespace App\Http\Livewire\Product;

use App\Product;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $price;
    public $description;
    public $image;

    public function render()
    {
        return view('livewire.product.create');
    }

    public function store(){
        $product = [
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
        ];

        Product::create($product);

        // untuk menyembunyikan form ketika data berhasil di inputkan
        $this->emit('productStored');
    }
}
