<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Video;

class PageController extends Controller
{

    public function login()
    {
        return view('admin.login');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function welcome()
    {
        return view('admin.welcome');
    }
}
