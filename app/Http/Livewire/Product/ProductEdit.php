<?php

namespace App\Http\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductEdit extends Component
{
    public $product, $name, $description, $price, $category_id;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->category_id = $product->category_id;
    }

    public function render()
    {
        $category = Category::orderBy('id')->get();
        return view('livewire.product.product-edit', [
            'category' => $category
        ]);
    }

    public function updateProduct()
    {
        $this->product->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category_id,
        ]);

        session()->flash('success', 'Product updated successfully!');
        return redirect()->route('products.index');
    }

    public function deleteProduct()
    {
        $this->product->delete();
        session()->flash('success', 'Product deleted successfully!');
        return redirect()->route('products.index');
    }
    // public function render()
    // {
    //     return view('livewire.product.product-edit');
    // }
}
