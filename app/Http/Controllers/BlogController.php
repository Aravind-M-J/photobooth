<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Support\Facades\ Input;
use Carbon\Carbon;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;


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

    public function new_blog()
    {
    	return view("backend.blog.new_blog");
	}

	public function store(Storage $storage,Request $request)
	{
		$blog = new blog;
		$blog->blog_title = $request->input('blog_title');
		$blog->blog_cont = $request->input('blog_cont');
		$image = $request->file( 'blog_img' );
        $timestamp = $this->getFormattedTimestamp();
        $savedImageName = $this->getSavedImageName( $timestamp, $image );
        $savedImageName = 'blog/'.$savedImageName;
        $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage );
		
		if ( $imageUploaded )
            {
				$blog->blog_img = $savedImageName;
				$blog->save();
				return redirect('blog/new')
				->withFlashMessage('Blog Added Succesfully')
				->withType('success');
            }

            return redirect('blog/new')
				->withFlashMessage('Blog Addition Failed!')
				->withType('danger');		
	}

	public function uploadImage( $image, $imageFullName, $storage )
    {
        $filesystem = new Filesystem;
        return $storage->disk( 'image' )->put( $imageFullName, $filesystem->get( $image ) );
    }

    /**
     * @return string
     */
    protected function getFormattedTimestamp()
    {
        return str_replace( ['-',' ', ':'], '', Carbon::now()->toDateTimeString() );
    }
	
	 /**
     * @param $timestamp
     * @param $image
     * @return string
     */
    protected function getSavedImageName( $timestamp, $image )
    {
        return $timestamp . '-' . $image->getClientOriginalName();
    }

public function show($id)
    {
        // get the nerd
        $blog = Blog::find($id);

        // show the view and pass the nerd to it
        return View::make('blog.list')
            ->with('blog', $blog);
    }

}


