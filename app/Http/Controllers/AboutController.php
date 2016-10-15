<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use Redirect;
use View;
 

class AboutController extends Controller {

  public function create()
    {
        return view('frontend.contact');
    }

  public function store(ContactFormRequest $request)
  {
  	    $name   = $request->input('name');
        $email  = $request->input('email');

  	    Mail::send('email.aboutmail', ['name' => $name, 'email' => $email], function ($message)
        {
            $message->from('me@gmail.com');
            $message->to('chippymerinmathew05@gmail.com');
        });


        return redirect('contactUs')
        ->withFlashMessage('Thanks for contacting us!')
        ->withType('success');

  }

}