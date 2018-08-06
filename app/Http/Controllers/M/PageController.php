<?php

namespace App\Http\Controllers\M;

use App\Category;
use App\Http\Controllers\Controller;
use App\Video;

class PageController extends Controller
{
    /**
     * 主页
     */
    public function index()
    {
        return view('m.index');

    }

}