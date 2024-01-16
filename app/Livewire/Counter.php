<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $counter = 0;
    public function increement()
    {
        $this->counter++;
    }
    public function decreement()
    {
        if($this->counter === 0){
            $this->counter = "Can not minus";
        }else{
            $this->counter--;
        }
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
