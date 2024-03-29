<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $posts, $title, $description, $post_id;
    public $updateMode = false;
    public function render()
    {
        $this->posts =Post::latest()->get();
        return view('livewire.posts');
    }
    
    private function resetInputFields(){
        $this->title = '';
        $this->description = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
  
        Post::create($validatedDate);
  
        session()->flash('message', 'Post Created Successfully.');
  
        $this->resetInputFields();
    }
  
   
}
