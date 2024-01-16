<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Free extends Component
{

    public $cname = "cp";

   public function mount(Request $request ,$cname)
   {
    $this->cname =$request->input('cname',$cname);
   }
   public function updated($cname)
   {
    $this->cname =strtoupper($cname);
   }
    public function render()
    {
        return view('livewire.free');
    }
}
