<?php

namespace App\Http\Livewire\Admin;

use App\Models\GGMPGallerModel;
use Livewire\Component;
use Livewire\WithPagination;

class GGPAGallery extends Component
{
    use WithPagination;   

    public function deleteProduct($id)
    {
        $product = GGMPGallerModel::find($id);
        $product->delete();
        session()->flash('success', 'Image deleted successfully');
    }

    public function render()
    {
        $gallery = GGMPGallerModel::paginate(5);
        return view('livewire.admin.g-g-p-a-gallery',['gallery' => $gallery])->layout('layouts.page');
    }
}
