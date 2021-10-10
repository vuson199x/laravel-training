<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showPassword(){
        return 'Here is passwork: 12345678';
    }
}
