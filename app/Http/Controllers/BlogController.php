<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Support\Facades\ Input;

class BlogController extends Controller
{
	
    public function new_blog(){
		return view("backend.blog.new_blog");
	}

	public function store(Request $request){
		$blog = new blog;
		$blog->blog_title = $request->input('blog_title');
		$blog->blog_cont = $request->input('blog_cont');
		$blog->blog_img = $request->input('blog_img');
		$blog->save();
		return ("data form saved into database laravel 5.2");				
	}
}
