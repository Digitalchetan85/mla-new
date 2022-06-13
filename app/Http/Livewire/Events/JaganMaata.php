<?php

namespace App\Http\Livewire\Events;

use App\Models\GMBGallery;
use App\Models\MRMGallery;
use App\Models\SVGallery;
use Livewire\Component;

class JaganMaata extends Component
{
    public function render()
    {
        $gmdgallery = GMBGallery::All();
        $svgallery = SVGallery::All();
        $mrmgallery = MRMGallery::All();
        return view('livewire.events.jagan-maata',['gmdgallery' => $gmdgallery, 'svgallery' => $svgallery, 'mrmgallery' => $mrmgallery])->layout('layouts.page');
    }
}
