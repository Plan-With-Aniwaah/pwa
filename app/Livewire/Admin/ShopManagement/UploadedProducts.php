<?php

namespace App\Livewire\Admin\ShopManagement;

use App\Models\Product;
use Livewire\Component;

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

    public function render()
    {
$products = \App\Models\Product::all();
        return view('livewire.admin.shop-management.uploaded-products', compact('products'));
    }
}
