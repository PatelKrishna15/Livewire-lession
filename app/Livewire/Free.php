<?php

namespace App\Livewire;

use Livewire\Component;

class Free extends Component
{

    public $cname = "cp";

    public $loud =false;

    public function resetName($cname ='crico'){
        $this->cname = $cname;
    }
    public function render()
    {
        return view('livewire.free');
    }
}
