<?php

namespace App\Http\Livewire\Admin;

use App\Models\GGMPGallerModel;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class GGMPAddGallery extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $name;
    public $image;

    public function adddata()
    {
        $this->validate([
            'name' => 'required',
            'image' => 'required|mimes:png,jpeg,jpg',
        ]);

        $newdata = new GGMPGallerModel();
        $newdata->name = $this->name;
        $imagename = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('ggmp-gallery', $imagename);
        $newdata->image = $imagename;

        $newdata->save();
        session()->flash('success', 'Image Uploaded Successfully');
        $this->reset();
    }     

    public function render()
    {
        return view('livewire.admin.g-g-m-p-add-gallery')->layout('layouts.page');
    }
}
