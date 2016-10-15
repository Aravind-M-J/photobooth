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
      $subject= $request->input('subject');
      $bodymessage= $request->input('message');
      $this->subject = $subject;
      $this->name    = ucwords($name);
      $this->email   = $email;

      Mail::send('email.aboutmail', ['name' => $name, 'email' => $email, 'subject' => $subject, 'bodymessage' => $bodymessage],  function ($message)
      {
          $message->from($this->email, 'Party Crooks - ' . $this->name);
          $message->to('chippymerinmathew05@gmail.com');
          $message->subject($this->subject);
      });


      return redirect('contactUs')
          ->withFlashMessage('Thanks for contacting us!')
          ->withType('success');

  }

}