<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ChangePassword;

class Password extends Controller {

    public function changePassword(){
        return view('backend.change_password');
    }

    public function changePasswordProcess(ChangePassword $request){
        $id = Auth::user()->getId();
        dd($request);
    }
} 