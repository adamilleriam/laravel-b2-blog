<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Author;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['featured_posts'] = Post::with('category','author')->where('is_featured',1)->where('status','published')->limit(3)->latest()->get();
        $data['recent_posts'] = Post::with('category','author')->where('status','published')->limit(3)->latest()->get();
        $data['most_viewed_posts'] = Post::with('category')
            ->orderBy('total_view','DESC')
            ->limit(5)
            ->get();


              //Adding new lines
        $author_info = DB::table('posts')
                 ->select('author_id', DB::raw('count(*) as total'))
                 ->groupBy('author_id')->orderBy('total','DESC')
                 ->first();
        $author_id = $author_info->author_id;

        $data['author_written_most_posts'] = Author::where('id',$author_id)->first(); 
        return view('front.home',$data);
    }
    public function blog_details($id)
    {
        $posts = Post::findOrFail($id);
        $data['blog_details'] = $posts;
        $posts->increment('total_view');
//        dd($data);
        return view('front.blog.details',$data);
    }
    public function category_blogs($id)
    {
        $data['posts'] = Post::with('category','author')->where(['category_id'=>$id,'status'=>'published'])->orderBy('id','DESC')->paginate(3);
        $data['category'] = Category::findOrFail($id);
        return view('front.blog.category_posts',$data);
    }
}
