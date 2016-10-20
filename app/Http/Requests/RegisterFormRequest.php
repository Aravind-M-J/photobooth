<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterFormRequest extends Request {

  public function authorize()
  {
     return true;
  }

  public function rules()
  {
    return [
        'client_name' => 'required|regex:/^[(a-zA-Z )]+$/u',
        'contact_number' =>  'required|regex:/^[0-9]{10}$/',
        'address' => 'required',
        'email' => 'required|email',
        'date' => 'required',
        'event_date' => 'required',
        'event_venue' => 'required',
        'event_type' => 'required',
        'package_selected' => 'required',
        'number_of_guests' => 'required|regex:/^[0-9]+$/',
        'mode_payement' => 'required',
        'advance' => 'required|regex:/^[0-9]+$/',
        'balance' => 'required|regex:/^[0-9]+$/',
    ];
  }

}