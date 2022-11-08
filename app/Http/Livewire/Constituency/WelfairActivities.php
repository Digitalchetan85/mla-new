<?php

namespace App\Http\Livewire\Constituency;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Component;

class WelfairActivities extends Component
{
    public function render()
    {
        SEOTools::setTitle('Welfare Schemes | Abbaya Chowdary');
        SEOTools::setDescription('Abbaya Chowdary , MLA-DENDULURU is  committed to the Welfare and Development of all segments of the society. Government have announced "Navarathnalu" comprising of various welfare and developmental programmes to achieve this objective.');
        SEOTools::opengraph()->setUrl('https://abbayachowdary.com/constituency/welfare-activities');
        SEOTools::setCanonical('https://abbayachowdary.com/constituency/welfare-activities');
        return view('livewire.constituency.welfair-activities')->layout('layouts.page');
    }
}
