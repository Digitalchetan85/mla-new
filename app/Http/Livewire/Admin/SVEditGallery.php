<?php

namespace App\Http\Livewire\Admin;

use App\Models\SVGallery;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class SVEditGallery extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $newimage;

    public function mount($product_slug)
    {
        $product = SVGallery::where('id', $product_slug)->first();
        $this->name = $product->name;
        $this->image = $product->image;
        $this->product_id = $product->id;
    }

    public function updateproduct()
    {
        $product = SVGallery::find($this->product_id);
        $product->name = $this->name;
        if ($this->newimage) {
            $imagename = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('sv-gallery', $imagename);
            $product->image = $imagename;
        }
        $product->save();
        session()->flash('success', 'Image Updated Successfully');
        $this->reset();
    }

    public function render()
    {
        $product = SVGallery::find($this->id);
        return view('livewire.admin.s-v-edit-gallery', ['product'=>$product])->layout('layouts.page');
    }
}
