<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Dashboard Login')]
#[Layout('components.layouts.meta-only')]
class PanelLogin extends Component
{
    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|min:8')]
    public $password = '';

    public $msg = '';

    public $count = 0;

    public function boot()
    {
        if (Auth::check()) {
            return redirect('/panel');
        }
    }

    public function login()
    {
        $this->count++;
        if (auth()->attempt($this->validate())) {
            request()->session()->regenerate();
            return redirect('/panel');
        }
        if ($this->count == 1) {
            $this->msg = 'Given Email & Password is not correct!!';
        } else {
            $this->msg = 'Wrong Again. Given Email & Password is not correct!!';
        }
    }

    public function render()
    {
        return view('livewire.panel-login');
    }
}
