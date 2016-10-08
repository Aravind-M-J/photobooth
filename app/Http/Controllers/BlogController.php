<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Support\Facades\ Input;

class BlogController extends Controller
{
	private $blog;
	public function __construct(Blog $blog){
		$this->blog = $blog;
	}

    public function new_blog(){
		return view("backend.blog.new_blog");
	}

	public function store(Request $request){
		$blog = $this->blog;
		$blog->blog_title= $request["blog_title"];
		$blog->blog_cont= $request["blog_cont"];
		$blog->blog_img=$request["blog_img"];
		$blog->save();
		return ("data form saved into database laravel 5.2");				
	}
}
