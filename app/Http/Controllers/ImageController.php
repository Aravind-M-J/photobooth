<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Images;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;

class ImageController extends Controller {

    /**
     * Show Page to Upload Images for gallery
     * @return View
     */
    public function create($eventid)
    {
		
        return view( 'backend.event_gallery.upload_images',['eventid'=>$eventid]);
    }

    /**
     * Function to upload images and populate database via XMLHTTPRequest
     *
     * @param Storage $storage
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|string
     */
	  public function store( Storage $storage, Request $request )
    {
		
		$images= new Images;
       
        if ( $request->isXmlHttpRequest() )
        {
            $image = $request->file( 'image' );
            $timestamp = $this->getFormattedTimestamp();
            $savedImageName = $this->getSavedImageName( $timestamp, $image );

            $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage );

            if ( $imageUploaded )
            {
				$images->event_id = $request->input('eventid');
                $images->name = $savedImageName;
				$images->save();
				return 'Uploaded Succesfully';
            }
            return "uploading failed";
        }

    }	
		
     /**
     * @param $image
     * @param $imageFullName
     * @param $storage
     * @return mixed
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
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
