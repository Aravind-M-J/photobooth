<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ChangePassword;
use Illuminate\Support\Facades\Hash;

class Password extends Controller {

    public function changePassword(){
        return view('backend.change_password');
    }

    public function changePasswordProcess(ChangePassword $request){
        $user = Auth::user();
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return redirect('changePassword')
            ->withFlashMessage('Password Changed succesfully! You will be Logged out now.')
            ->withType('success')
            ->withLogout('true');

    }
} 