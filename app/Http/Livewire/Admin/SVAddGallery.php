<?php

namespace App\Http\Livewire\Admin;

use App\Models\SVGallery;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class SVAddGallery extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $name;
    public $image;

    public function adddata()
    {
        $this->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $newdata = new SVGallery();
        $newdata->name = $this->name;
        $imagename = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('sv-gallery', $imagename);
        $newdata->image = $imagename;

        $newdata->save();
        session()->flash('success', 'Image Uploaded Successfully');
        $this->reset();
    }     

    public function render()
    {
        return view('livewire.admin.s-v-add-gallery')->layout('layouts.page');
    }
}
