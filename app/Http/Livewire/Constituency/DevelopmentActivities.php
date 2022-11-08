<?php

namespace App\Http\Livewire\Constituency;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Component;

class DevelopmentActivities extends Component
{
    public function render()
    {
        SEOTools::setTitle('Development Activities | Abbaya Chowdary');
        SEOTools::setDescription('Abbaya Chowdary, MLA-DENDULURU is committed for Development of his constituency by improving infrastructure like roads, CC Drains , health clinics, RBKs, Sachivalayam buildings and many development activites unders different schemes like RUrban,ZP funds');
        SEOTools::opengraph()->setUrl('https://abbayachowdary.com/constituency/development-activities');
        SEOTools::setCanonical('https://abbayachowdary.com/constituency/development-activities');
        return view('livewire.constituency.development-activities')->layout('layouts.page');
    }
}
