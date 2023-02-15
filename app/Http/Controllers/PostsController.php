<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostsController extends Controller
{
    public function index(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $data = $response->json();
        return view('posts', compact('data'));
    }
}
