<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class CategoryIndex extends Component
{
    public $slug = '';
    public function render()
    {
        $slug = $this->slug;
        $category = Category::where('is_active',true)
        ->where('slug',$slug)
        ->first();
        $posts = Post::where('is_publish',true)
        ->whereHas('category',function($q) use ($slug){
            $q->where('slug',$slug);
        })
        ->orderBy('id','desc')
        ->get();
        return view('livewire.category-index',[
            'category' => $category,
            'posts' => $posts,
        ]);
    }
}
