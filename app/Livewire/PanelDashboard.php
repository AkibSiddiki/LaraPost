<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard Home')]

class PanelDashboard extends Component
{
    public $title = "Welcome to panel";

    public function boot()
    {
        if (!Auth::check()) {
            return redirect('/panel-login');
        }
    }
    public function render()
    {
        return view('livewire.panel-dashboard');
    }
}
