<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;
use Carbon\Carbon;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;

class EventGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.event_gallery.new_eventgallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request,Storage $storage)
    {
		
		$event= new Event;
        $event->name = $request->input('evtname');
        $event->description  = $request->input('descrp');
		
		$image = $request->file( 'img' );
            $timestamp = $this->getFormattedTimestamp();
            $savedImageName = $this->getSavedImageName( $timestamp, $image );
			$imageName = $savedImageName;
			$savedImageName = 'event/'.$request->input('evtname').'/'.$savedImageName;
            $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage );

            if ( $imageUploaded )
            {				
		    $event->image  = $savedImageName;
            $event->save();
			$event_id = $event->id;
		
		    return redirect('event/gallery/'.$event_id);
			//return view( 'backend.event_gallery.upload_images',['eventid'=>$event_id]);
            }
			return "uploading failed";
			
			
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
            return str_replace( [' ', ':'], '-', Carbon::now()->toDateTimeString() );
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
}