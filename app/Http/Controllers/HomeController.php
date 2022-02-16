<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }

    public function test()
    {
        return 'test';
    }

    public function news($id)
    {
        return 'News number: ' . $id;
    }
}
