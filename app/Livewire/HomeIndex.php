<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class HomeIndex extends Component
{
    public function render()
    {
        $trending = Post::where('is_publish',true)->get();
        $newOne = Post::where('is_publish',true)
        ->orderBy('id','desc')
        ->limit(5)
        ->first();
        $news_left = Post::where('is_publish',true)
        ->whereNot('id',$newOne->id)
        ->orderBy('id','desc')
        ->limit(3)
        ->get();
        $arr_post_id = $news_left->pluck('id');
        // dd($arr_post_id);
        $news_right = Post::where('is_publish',true)
        ->whereNot('id',$newOne->id)
        ->whereNotIn('id',$arr_post_id)
        ->orderBy('id','desc')
        ->limit(3)
        ->get();

        return view('livewire.home-index',[
            'trending' => $trending,
            'newOne' => $newOne,
            'news_left' => $news_left,
            'news_right' => $news_right,
        ]);
    }
}
