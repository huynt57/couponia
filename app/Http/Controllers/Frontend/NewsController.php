<?php

namespace App\Http\Controllers\Frontend;

use App\Deal\Functions;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use DB;

class NewsController extends Controller
{
    //

    public function getNews()
    {
        $posts = DB::table('posts')->orderBy('created_at','desc')->paginate(config('constants.PAGINATE_NUMBER'));
        return view('frontend.news', [
            'posts' => $posts
        ]);

    }

    public function getNewsById($id)
    {
        if(!is_numeric($id))
        {
            return 'Tin tức không tồn tại';
        }

        $checkNew = Post::find($id)->count();

        if($checkNew == 0)
        {
            return 'Tin tức không tồn tại';
        }

        $post = Post::find($id);
        $related = Functions::getRandomNews();

        return view('frontend.new', [
            'post' => $post,
            'relatedPosts' => $related
        ]);
    }

    public function crawl()
    {
        Functions::crawlJamjaMP();
        Functions::crawlJamjaMac();
    }
}
