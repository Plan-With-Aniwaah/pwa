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
    public $productId;
    public $isEdit = false;

        #[Url(keep: true)]

    public $search = "";

    public function delete($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            session()->flash('message', 'Product deleted successfully.');
        } else {
            session()->flash('error', 'Product not found.');
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);
        if ($product) {
            $this->productId = $product->id;
            $this->product_name = $product->product_name;
            $this->product_description = $product->product_description;
            $this->product_images = $product->product_images;
            $this->product_price = $product->product_price;
            $this->product_category = $product->product_category;
            $this->product_tags = $product->product_tags;
            $this->product_videos = $product->product_videos;
            $this->product_quantity = $product->product_quantity;
            $this->isEdit = true;
        } else {
            session()->flash('error', 'Product not found.');
        }
    }

    public function update(){
        $product = Product::find($this->productId);
        if ($product) {
            $product->product_name = $this->product_name;
            $product->product_description = $this->product_description;
            $product->product_images = $this->product_images;
            $product->product_price = $this->product_price;
            $product->product_category = $this->product_category;
            $product->product_tags = $this->product_tags;
            $product->product_videos = $this->product_videos;
            $product->product_quantity = $this->product_quantity;
            $product->save();
            session()->flash('message', 'Product updated successfully.');
            $this->isEdit = false;
        } else {
            session()->flash('error', 'Product not found.');
        }

    }
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
