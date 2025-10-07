<?php

namespace App\Livewire\Admin\ShopManagement;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    use \Livewire\WithFileUploads;

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


  public function resetInputFields()
    {
        $this->reset([
            'product_name',
            'product_description',
            'product_images',
            'product_price',
            'product_category',
            'product_tags',
            'product_videos',
            'product_quantity'
        ]);
    }
    protected $rules = [
        'product_name' => 'required|string',
        'product_description' => 'required|string',
        'product_images' => 'nullable|array',
        'product_images.*' => 'image|mimes:jpg,jpeg,png,gif,webp, heic|max:10240',
        'product_price' => 'required|numeric',
        'product_category' => 'required|string',
        'product_tags' => 'nullable|string',
        'product_videos' => 'nullable|array',
        'product_videos.*' => 'file|mimetypes:video/mp4,video/avi,video/mov,video/wmv|max:614400', // 100 MB each
        'product_quantity' => 'required|integer',
    ];

 public function create()
    {
        $this->validate();
    

        $imagePaths = [];
        if (!empty($this->product_images)) {
            foreach ($this->product_images as $i => $image) {
                // use storeAs on 'public' disk so you can access via Storage::url()
                $filename = time() . '_' . $i . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('images', $filename, 'public');
                $imagePaths[] = $path;
            }
        }

         $videoPaths = [];
        if (!empty($this->product_videos)) {
            foreach ($this->product_videos as $i => $video) {
                $filename = time() . '_vid_' . $i . '.' . $video->getClientOriginalExtension();
                $path = $video->storeAs('videos', $filename, 'public');
                $videoPaths[] = $path;
            }
        }


        Product::create([
            'product_name' => $this->product_name,
            'product_description' => $this->product_description,
            'product_price' => $this->product_price,
            'product_category' => $this->product_category,
            'product_tags' => $this->product_tags,
            'product_images' => json_encode($imagePaths),
            'product_videos' => json_encode($videoPaths),            
            'product_quantity' => $this->product_quantity,
        ]);

        $this->resetInputFields();
        session()->flash('success', 'Product created successfully!');
    }
    public function render()
    {
        return view('livewire.admin.shop-management.products');
    }
}
