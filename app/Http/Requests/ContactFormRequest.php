<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request {

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
    'Name' => 'required',
    'Email' => 'required|email',
    'Subject' => 'required',
    'Message' => 'required',
  ];
  }

}