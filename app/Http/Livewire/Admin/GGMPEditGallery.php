<?php

namespace App\Http\Livewire\Admin;

use App\Models\GGMPGallerModel;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class GGMPEditGallery extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $newimage;

    public function mount($product_slug)
    {
        $product = GGMPGallerModel::where('id', $product_slug)->first();
        $this->name = $product->name;
        $this->image = $product->image;
        $this->product_id = $product->id;
    }

    public function updateproduct()
    {
        $product = GGMPGallerModel::find($this->product_id);
        $product->name = $this->name;
        if ($this->newimage) {
            $imagename = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('ggmp-gallery', $imagename);
            $product->image = $imagename;
        }
        $product->save();
        session()->flash('success', 'Image Updated Successfully');
    }

    public function render()
    {
        $product = GGMPGallerModel::find($this->id);
        return view('livewire.admin.g-g-m-p-edit-gallery', ['product'=>$product])->layout('layouts.page');
    }
}
