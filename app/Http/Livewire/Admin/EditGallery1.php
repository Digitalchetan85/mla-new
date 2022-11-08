<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gallery1;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditGallery1 extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $newimage;

    public function mount($product_slug)
    {
        $product = Gallery1::where('id', $product_slug)->first();
        $this->name = $product->name;
        $this->image = $product->image;
        $this->product_id = $product->id;
    }

    public function updateproduct()
    {
        $product = Gallery1::find($this->product_id);
        $product->name = $this->name;
        if ($this->newimage) {
            $imagename = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('gallery1', $imagename);
            $product->image = $imagename;
        }
        $product->save();
        session()->flash('success', 'Image Updated Successfully');
        $this->reset();
    }

    public function render()
    {
        $product = Gallery1::find($this->id);
        return view('livewire.admin.edit-gallery1', ['product'=>$product])->layout('layouts.page');
    }
}
