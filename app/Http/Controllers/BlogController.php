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
    
    protected $blog;
    public function __construct(Blog $blog){
        $this->blog=$blog;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $allblog = $this->blog
               ->get();
               //dd("$allblog");
               
        return view('backend.blog.list_blog',compact('allblog'));  
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function new_blog()
    {
    return view("backend.blog.new_blog");
	}

	public function store(Storage $storage,Request $request)
	{
		$blog = new Blog;
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
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */

        public function show($id) 
        {
        //
    }

         public function edit($id) {
        $blog=Blog::find($id);
        return View('backend.blog.edit_blog')
        ->with('id',$id)
        ->with('blog',$blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request) {
        //update values in notice
        $blog=Blog::find($id);
        $blog->blog_title = $request->input('blog_title');
        $blog->blog_cont = $request->input('blog_cont');
        $blog->blog_img = $request->input('blog_img');
        $blog->save();
        return redirect('blog/new')
                        ->withFlashMessage('Blog Updated successfully!')
                        ->withType('success');
    }

/** Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
   public function destroy($id) {
      $blog= new Blog;
      $blog=Blog::find($id);
      unlink(public_path('images/'.$blog->blog_img));
      $blog->delete();
     return redirect('blog');
    }

}









