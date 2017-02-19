<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public  function  getDashboard() {



        $tags = Tag::all();

        return view('dashboard',['tags'=>$tags]);


    }
}
