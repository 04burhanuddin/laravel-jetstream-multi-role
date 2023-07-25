<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryIndex extends Component
{
    public function render()
    {
        return view('livewire.category.category-index', [
            'categories' => Category::all()
        ]);
    }
}
