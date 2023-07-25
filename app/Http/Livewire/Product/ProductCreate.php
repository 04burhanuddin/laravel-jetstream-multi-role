<?php

namespace App\Http\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductCreate extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $price;
    public $cat;
    public $image;
    public $category_id;
    public $imageUrl;

    public function render()
    {
        $category = Category::orderBy('id')->get();
        return view('livewire.product.product-create', [
            'category' => $category
        ]);
    }

    public function createProduct()
    {
        $this->validate([
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'image|max:20000|required',
        ]);

        $imageName = md5($this->image . microtime()) . '.' . $this->image->extension();
        Storage::putFileAs(
            'public/images',
            $this->image,
            $imageName
        );
        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'photo' => $imageName,
            'category_id' => $this->category_id,
        ]);

        session()->flash('success', 'Product created successfully!');
        return redirect()->route('products.index');
    }
}
