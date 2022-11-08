<?php

namespace App\Http\Livewire\Admin;

use App\Models\Gallery1;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AddGallery1 extends Component
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

        $newdata = new Gallery1();
        $newdata->name = $this->name;
        $imagename = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('gallery1', $imagename);
        $newdata->image = $imagename;

        $newdata->save();
        session()->flash('success', 'Image Uploaded Successfully');
        $this->reset();
    }     

    public function render()
    {
        return view('livewire.admin.add-gallery1')->layout('layouts.page');
    }
}
