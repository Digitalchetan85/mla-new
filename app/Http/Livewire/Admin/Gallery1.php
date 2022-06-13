<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gallery1 as ModelsGallery1;
use Livewire\Component;
use Livewire\WithPagination;

class Gallery1 extends Component
{
    use WithPagination;   

    public function deleteProduct($id)
    {
        $product = ModelsGallery1::find($id);
        $product->delete();
        session()->flash('success', 'Image deleted successfully');
    }

    public function render()
    {
        $gallery = ModelsGallery1::paginate(5);
        return view('livewire.admin.gallery1',['gallery' => $gallery])->layout('layouts.page');
    }
}
