<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostIndex extends Component
{
    public $slug = '';
    public function render()
    {
        $post = Post::where('is_publish',true)
        ->where('slug',$this->slug)
        ->first();
        $recent_post = Post::where('is_publish',true)
        ->whereNot('slug',$this->slug)
        ->where('category_id',$post->category_id)
        ->limit(6)
        ->get();

        return view('livewire.post-index',[
            'post'=>$post,
            'recent_post' => $recent_post
        ]);
    }
}
