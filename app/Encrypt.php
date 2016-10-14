<?php

namespace App;

class Encrypt
{
    protected $method = 'AES-128-CBC';
    protected $password = '';
    protected $iv = 'a16bytelongiv000';

    public function __construct(){
        $this->password = date('d/m/Y');
    }

    public function encrypt($data){
        return base64_encode(openssl_encrypt($data,$this->$method,$this->$password,false,$this->$iv));
    }

    public function decrypt($data){
        return openssl_decrypt(base64_decode($data),$this->$method,$this->$password,false,$this->$iv);
    }
}
