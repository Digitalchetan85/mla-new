<?php

namespace App\Http\Livewire\Admin;

use App\Models\SVGallery as ModelsSVGallery;
use Livewire\Component;
use Livewire\WithPagination;

class SVGallery extends Component
{
    use WithPagination;   

    public function deleteProduct($id)
    {
        $product = ModelsSVGallery::find($id);
        $product->delete();
        session()->flash('success', 'Image deleted successfully');
    }

    public function render()
    {
        $gallery = ModelsSVGallery::paginate(5);
        return view('livewire.admin.s-v-gallery',['gallery' => $gallery])->layout('layouts.page');
    }
}
