<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $search = '';
    public $category = null;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingCategory()
    {
        $this->resetPage();
    }

    public function render()
    {
        $categories = Category::all();

        $products = Product::where('name', 'like', '%' . $this->search . '%')
            ->when($this->category, function ($query) {
                $query->where('category_id', $this->category);
            })
            ->paginate(9);

        return view('livewire.product-index', compact('products', 'categories'));
    }
}
