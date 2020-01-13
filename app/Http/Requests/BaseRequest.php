<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class BaseRequest extends Request
{
    public function wantsJson(){
        return true;
    }

    public function expectsJson(){
        return true;
    }
}
