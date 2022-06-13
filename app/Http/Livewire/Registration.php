<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
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
    }

    public function render()
    {
        return view('livewire.registration')->layout('layouts.page');
    }
}
