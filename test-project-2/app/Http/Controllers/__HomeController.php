<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $blogs = [
                    [
                        'title' => 'Title 1',
                        'content' => 'Content 1',
                        'status' => 1,
                    ],
                    [
                        'title' => 'Title 2',
                        'content' => 'Content 2',
                        'status' => 0,
                    ],
                    [
                        'title' => 'Title 3',
                        'content' => 'Content 3',
                        'status' => 1,
                    ],
                    [
                        'title' => 'Title 4',
                        'content' => 'Content 4',
                        'status' => 1,
                    ],
                ];
        return view('home', compact('blogs') );
    }
}
