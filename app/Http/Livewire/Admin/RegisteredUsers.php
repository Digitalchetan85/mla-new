<?php

namespace App\Http\Livewire\Admin;

use App\Models\RegisterModel;
use Livewire\Component;
use Livewire\WithPagination;

class RegisteredUsers extends Component
{
    use WithPagination;
    public function render()
    {
        $users = RegisterModel::paginate(1);
        return view('livewire.admin.registered-users', ['users' => $users])->layout('layouts.page');
    }
}
