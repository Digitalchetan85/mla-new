<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Registration extends Component
{
    public $name;
    public $mandal;
    public $village;
    public $email;
    public $contact;
    public $message;

    public function adddata()
    {
        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|digits:10',
            'mandal' => 'required',
            'village' => 'required',
            'message' => 'required',
        ]);

        Mail::to('chetankumar.nv@gmail.com')->send(new ContactMail($data));
        session()->flash('success', 'Thanks for contacting us. We will reach you soon.');
        $this->reset();
    }

    public function render()
    {
        SEOTools::setTitle('Contact us | Abbaya Chowdary');
        SEOTools::opengraph()->setUrl('https://abbayachowdary.com/registration');
        SEOTools::setCanonical('https://abbayachowdary.com/registration');
        
        return view('livewire.registration')->layout('layouts.page');
    }
}
