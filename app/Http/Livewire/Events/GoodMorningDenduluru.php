<?php

namespace App\Http\Livewire\Events;

use App\Models\Gallery1;
use App\Models\GGMPGallerModel;
use Livewire\Component;

class GoodMorningDenduluru extends Component
{
    public function render()
    {
        $images = Gallery1::All();
        $galleryImages = GGMPGallerModel::All();
        return view('livewire.events.good-morning-denduluru', ['images' => $images, 'galleryImages' => $galleryImages])->layout('layouts.page');
    }
}
