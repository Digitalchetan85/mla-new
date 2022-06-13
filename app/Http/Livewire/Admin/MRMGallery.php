<?php

namespace App\Http\Livewire\Admin;

use App\Models\MRMGallery as ModelsMRMGallery;
use Livewire\Component;
use Livewire\WithPagination;

class MRMGallery extends Component
{
    use WithPagination;   

    public function deleteProduct($id)
    {
        $product = ModelsMRMGallery::find($id);
        $product->delete();
        session()->flash('success', 'Image deleted successfully');
    }

    public function render()
    {
        $gallery = ModelsMRMGallery::paginate(5);
        return view('livewire.admin.m-r-m-gallery',['gallery' => $gallery])->layout('layouts.page');
    }
}
