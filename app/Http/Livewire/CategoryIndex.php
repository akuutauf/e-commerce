<?php

namespace App\Http\Livewire;

use App\Models\Itm1;
use Livewire\Component;

class CategoryIndex extends Component
{
    public $byCategories;

    public function render()
    {
        $query = Itm1::query();
        $dataCategory = Itm1::distinct()->get(['MP_ProductName']);

        $this->category = Itm1::all();
        $query->when($this->byCategories != "", function ($q) {
            return $q->where('MP_ProductName', $this->byCategories);
        });

        $products = $query->get();
        return view('livewire.category-index', compact('products'))->with('dataCategory', $dataCategory);
    }
}
