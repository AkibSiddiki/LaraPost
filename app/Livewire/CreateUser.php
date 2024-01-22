<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Create New User')]
class CreateUser extends Component
{
    #[Validate('required|min:3|max:56')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|min:8|confirmed')]
    public $password = '';

    #[Validate('required|min:8')]
    public $password_confirmation = '';

    public $msg = '';

    public function create()
    {
        // dd($this->validate());
        if (User::create($this->validate())) {
            $this->reset('name');
            $this->reset('email');
            $this->reset('password');
            $this->reset('password_confirmation');

            $this->msg = 'New user created';
        }
    }


    public function render()
    {
        return view('livewire.create-user');
    }
}
