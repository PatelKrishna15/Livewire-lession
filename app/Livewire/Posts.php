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
   
}
