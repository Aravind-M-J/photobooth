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
    'name' => 'required|regex:/^[(a-zA-Z )]+$/u',
    'email' => 'required|email',
    'phone' =>  'required|regex:/^[0-9]{10}$/',
    'message' => 'required',
  ];
  }

}