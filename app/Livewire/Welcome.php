<?php

namespace App\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    
    public $name = '';
    
    public function render()
    {
        return view('livewire.welcome');
    }
}
