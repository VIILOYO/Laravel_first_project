<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index() {
        return ['Home', 'Work', 'University', 'GF house'];
    }

    public function place($id) {
        $places = ['Home', 'Work', 'University', 'GF house'];
        if($id>count($places) || $id<1) return 'Такого места нет';
        return $places[$id-1];
    }
}
