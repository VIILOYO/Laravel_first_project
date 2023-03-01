<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        return 'Hello, World!';
    }

    public function post($id) {
        for ($i=0; $i < $id+10; $i++) { 
            $posts[] = mt_rand(0, $id+10);
        }
        return $posts[$id];
    }
}
