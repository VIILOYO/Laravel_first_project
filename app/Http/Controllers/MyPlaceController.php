<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class MyPlaceController extends Controller
{
    public function index() {
        $places = Place::all();
        foreach($places as $place) {
            echo $place->name . '<br>';
            echo $place->description . '<hr>';
        }
    }

    public function place($id) {
        $place = Place::findOrFail($id);
        return "$place->name<br>$place->description";
    }

    public function highRating() {
        $places = Place::where('rating', '>=', '50')->orderByDesc('rating')->get();
        
        foreach($places as $place) {
            echo $place->name . '<br>';
            echo $place->description . '<br>';
            echo $place->rating . '<hr>';
        }
    }
}
