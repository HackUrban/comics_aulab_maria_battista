<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PublicController;

class PublicController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function createComic()
    {
        return view('comic.create');
    }
}
