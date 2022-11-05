<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminLogin extends Component
{
    public function render()
    {
        return view('livewire.admin-login');
    }

    public function showAlert()
    {
       $this->dispatchBrowserEvent('toastr:warning', ['msg' => 'An error occured, Please contact world']);
    }
}
