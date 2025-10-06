<?php

namespace App\Livewire\Admin\ShopManagement;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Url;

class UploadedProducts extends Component
{
        public $product_name;
    public $product_description;
    public $product_images = [];
    public $product_price;
    public $product_category;
    public $product_tags;
    public $product_videos = [];
    public $product_quantity;
    public $id;
    public $isEdit = false;

        #[Url(keep: true)]

    public $search = "";

    public function render()
    {
        $products = Product::query()
            ->when($this->search, function ($query) {
                $search = $this->search;
                $query->where(function($q) use ($search) {
                    $q->where('product_name', 'like', "%{$search}%")
                      ->orWhere('product_category', 'like', "%{$search}%")
                      ->orWhere('product_tags', 'like', "%{$search}%")
                      ->orWhere('product_description', 'like', "%{$search}%");
                });
            })
            ->orderBy('id', 'desc')
            ->get();

        return view('livewire.admin.shop-management.uploaded-products', compact('products'));
    }
}
