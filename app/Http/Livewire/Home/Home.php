<?php

namespace App\Http\Livewire\Home;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        SEOTools::setTitle('Abbaya Chowdary');
        SEOTools::setDescription('Abbaya Chowdary is Member of legislative assembly (MLA) in Government of Andhra Pradesh representing Denduluru Constituency');
        SEOTools::opengraph()->setUrl('https://abbayachowdary.com/');
        SEOTools::setCanonical('https://abbayachowdary.com/');

        // $posts = Post::all();

        return view('livewire.home.home')->layout('layouts.base');
    }
}
