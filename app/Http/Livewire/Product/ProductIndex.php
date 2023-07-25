<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public function render()
    {
        return view('livewire.product.product-index', [
            'products' => Product::paginate(10),
        ]);
    }

    public function deleteProduct($productId)
    {
        $product = Product::find($productId);

        if ($product) {
            $product->delete();
            session()->flash('success', 'Product deleted successfully!');
        } else {
            session()->flash('error', 'Product not found!');
        }
    }
}
