<?php

namespace App\Livewire;

use Livewire\Component;

class PanelDashboard extends Component
{
    public $title = "Welcome to panel";
    public function render()
    {
        return view('livewire.panel-dashboard');
    }
}
