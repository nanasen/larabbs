<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function root()
    {
        $test = 'a';
        $testb = 'b';
        return view('pages.root');
    }
}
