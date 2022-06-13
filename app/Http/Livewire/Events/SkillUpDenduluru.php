<?php

namespace App\Http\Livewire\Events;

use App\Exports\RegisteredUsersExport;
use App\Mail\RegisterMail;
use App\Models\RegisterModel;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Excel;
use Illuminate\Support\Facades\Mail;

class SkillUpDenduluru extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $contact;
    public $mandal;
    public $address;
    public $village;
    public $sscpass;
    public $sscpercentage;
    public $interpass;
    public $interpercentage;
    public $qualification;
    public $graduationstream;
    public $graduationpass;
    public $graduationpercentage;
    public $pgpass;
    public $pgpercentage;
    public $trainings;
    public $resume;

    public function adddata()
    {
        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|digits:10',
            'mandal' => 'required',
            'address' => 'required',
            'village' => 'required',
            'sscpass' => 'required',
            'sscpercentage' => 'required',
            'interpass' => 'required',
            'interpercentage' => 'required',
            'qualification' => 'required',
            'graduationstream' => 'required',
            'graduationpass' => 'required',
            'graduationpercentage' => 'required',
            'resume'=> 'required|mimes:pdf|max:1024',
        ]);

        $newdata = new RegisterModel();
        $newdata->name = $this->name;
        $newdata->email = $this->email;
        $newdata->contact = $this->contact;
        $newdata->mandal = $this->mandal;
        $newdata->village = $this->village;
        $newdata->address = $this->address;
        $newdata->sscyearofpass = $this->sscpass;
        $newdata->sscpercentage = $this->sscpercentage;
        $newdata->interyearofpass = $this->interpass;
        $newdata->interpercentage = $this->interpercentage;
        $newdata->qualification = $this->qualification;
        $newdata->graduationstream = $this->graduationstream;
        $newdata->graduationyearofpass = $this->graduationpass;
        $newdata->graduationpercentage = $this->graduationpercentage;
        $newdata->postgraduationyearofpass = $this->pgpass;
        $newdata->postgraduationpercentage = $this->pgpercentage;
        $newdata->trainings = $this->trainings;

        $imagename = Carbon::now()->timestamp . '.' . $this->resume->extension();
        $this->resume->storeAs('resumes', $imagename);
        $newdata->resume = $imagename;

        $newdata->save();

        // $data = array($data, 'imagename' => $imagename);

        Mail::to('chetankumar.nv@gmail.com')->send(new RegisterMail($data));
        session()->flash('success', 'Registered Successfully');
    }

    public function exportIntoExcel()
    {
        return Excel::download(new RegisteredUsersExport,'registered-users-list.xlsx');
    }

    public function render()
    {
        return view('livewire.events.skill-up-denduluru')->layout('layouts.page');
    }
}
