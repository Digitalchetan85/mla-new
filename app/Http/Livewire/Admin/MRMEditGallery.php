<?php

namespace App\Http\Livewire\Admin;

use App\Models\MRMGallery;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class MRMEditGallery extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $newimage;

    public function mount($product_slug)
    {
        $product = MRMGallery::where('id', $product_slug)->first();
        $this->name = $product->name;
        $this->image = $product->image;
        $this->product_id = $product->id;
    }

    public function updateproduct()
    {
        $product = MRMGallery::find($this->product_id);
        $product->name = $this->name;
        if ($this->newimage) {
            $imagename = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('mrm-gallery', $imagename);
            $product->image = $imagename;
        }
        $product->save();
        session()->flash('success', 'Image Updated Successfully');
        $this->reset();
    }

    public function render()
    {
        $product = MRMGallery::find($this->id);
        return view('livewire.admin.m-r-m-edit-gallery', ['product'=>$product])->layout('layouts.page');
    }
}
