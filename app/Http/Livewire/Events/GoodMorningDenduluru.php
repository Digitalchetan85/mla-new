<?php

namespace App\Http\Livewire\Events;

use App\Models\Gallery1;
use App\Models\GGMPGallerModel;
use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Component;

class GoodMorningDenduluru extends Component
{
    public function render()
    {
        $images = Gallery1::All();
        $galleryImages = GGMPGallerModel::All();

        SEOTools::setTitle('Gadapa Gadapaku Mana Prabhutvam | Abbaya Chowdary');
        SEOTools::setDescription('The prime objective of the Gadapa Gadapaku Mana Prabhutvam, it said, is to create awareness among the public about the schemes and programmes of the government; to ensure that the benefits reach the last mile beneficiary covering all the eligible beneficiaries; and seek feedback /suggestions from the public for process improvement and further improve the service delivery.”');
        SEOTools::opengraph()->setUrl('https://abbayachowdary.com/events/gadapa-gadapaku-mana-prabhutvam');
        SEOTools::setCanonical('https://abbayachowdary.com/events/gadapa-gadapaku-mana-prabhutvam');
        
        return view('livewire.events.good-morning-denduluru', ['images' => $images, 'galleryImages' => $galleryImages])->layout('layouts.page');
    }
}
