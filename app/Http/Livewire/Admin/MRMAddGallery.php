<?php

namespace App\Http\Livewire\Admin;

use App\Models\MRMGallery;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class MRMAddGallery extends Component
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

        $newdata = new MRMGallery();
        $newdata->name = $this->name;
        $imagename = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('mrm-gallery', $imagename);
        $newdata->image = $imagename;

        $newdata->save();
        session()->flash('success', 'Image Uploaded Successfully');
        $this->reset();
    }     

    public function render()
    {
        return view('livewire.admin.m-r-m-add-gallery')->layout('layouts.page');
    }
}
