<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PanelLogout extends Component
{
    public $user = [];

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/panel-login');
    }

    public function render()
    {
        return view('livewire.panel-logout');
    }
}
