<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Navegation extends Component
{
    public function render()
    {
        $categories = Category::all();

        return view('livewire.navegation', compact('categories'));
    }
}
