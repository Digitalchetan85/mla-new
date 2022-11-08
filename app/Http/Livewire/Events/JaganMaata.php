<?php

namespace App\Http\Livewire\Events;

use App\Models\GMBGallery;
use App\Models\MRMGallery;
use App\Models\SVGallery;
use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Component;

class JaganMaata extends Component
{
    public function render()
    {
        $gmdgallery = GMBGallery::All();
        $svgallery = SVGallery::All();
        $mrmgallery = MRMGallery::All();

        SEOTools::setTitle('Good Morning Denduluru | Abbaya Chowdary');
        SEOTools::setDescription('Good Morning Denduluru is a program designed by Abbaya Chowdary ,MLA-Denduluru to visit the villages of Denduluru Constituency in the morning to interact with the people and to know about the ground level issues , and co-ordinating with the concerned officers to get the solution for those issues.');
        SEOTools::opengraph()->setUrl('https://abbayachowdary.com/events/jagan-maata-abbaya-bata');
        SEOTools::setCanonical('https://abbayachowdary.com/events/jagan-maata-abbaya-bata');
        
        return view('livewire.events.jagan-maata',['gmdgallery' => $gmdgallery, 'svgallery' => $svgallery, 'mrmgallery' => $mrmgallery])->layout('layouts.page');
    }
}
