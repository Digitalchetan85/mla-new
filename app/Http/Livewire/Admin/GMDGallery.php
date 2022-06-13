<?php

namespace App\Http\Livewire\Admin;

use App\Models\GMBGallery;
use Livewire\Component;
use Livewire\WithPagination;

class GMDGallery extends Component
{
    use WithPagination;   

    public function deleteProduct($id)
    {
        $product = GMBGallery::find($id);
        $product->delete();
        session()->flash('success', 'Image deleted successfully');
    }

    public function render()
    {
        $gallery = GMBGallery::paginate(5);
        return view('livewire.admin.g-m-d-gallery',['gallery' => $gallery])->layout('layouts.page');
    }
}
