<?php

namespace App\Http\Livewire\Admin;

use App\Models\GMBGallery;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class GMDEditGallery extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $newimage;

    public function mount($product_slug)
    {
        $product = GMBGAllery::where('id', $product_slug)->first();
        $this->name = $product->name;
        $this->image = $product->image;
        $this->product_id = $product->id;
    }

    public function updateproduct()
    {
        $product = GMBGAllery::find($this->product_id);
        $product->name = $this->name;
        if ($this->newimage) {
            $imagename = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('gmd-gallery', $imagename);
            $product->image = $imagename;
        }
        $product->save();
        session()->flash('success', 'Image Updated Successfully');
        $this->reset();
    }

    public function render()
    {
        $product = GMBGallery::find($this->id);
        return view('livewire.admin.g-m-d-edit-gallery', ['product'=>$product])->layout('layouts.page');
    }
}
