<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Event;
use App\Images;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.home');
    }
	
	public function root(){
		$data= new Event;
        $data = $data->orderBy('created_at')
            ->limit(4)
            ->get();
		return view('frontend.home')->with('data',$data);
	}
	
	public function gallery($id){
        $event = new Event;
        $event = $event->find($id);
		$images= new Images;
        $data = $images->where([
            'event_id'=>$id,
            'deleted_at'=>null
        ])
            ->get();
		return view('frontend.gallery')->with('data',$data)->with('event',$event);
	}
    public function events(){
        $events= new Event;
        $data = $events
            ->get();
        return view('frontend.events')->with('data',$data);
    }
}
