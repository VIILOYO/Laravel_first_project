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

    public function create() {
        $names = ['Пирамиды', 'Колизей', 'Сахара', 'Эйфелева башня', 'Красная площадь', 'Голливуд'];
        $descriptions = [
            'Пирамиды' => 'Египетские пирамиды, расположенные недалеко от города Каир...',
            'Колизей' => 'Колизей – один из самых узнаваемых архитектурных памятников...',
            'Сахара' => 'Сахара — крупнейшая пустыня, расположенная в Северной Африке...',
            'Эйфелева башня' => 'Эйфелева башня — самая узнаваемая достопримечательность Парижа...',
            'Красная площадь' => 'Основной символ и наиболее известное историческое место Москвы...',
            'Голливуд' => 'Голливуд — район к западу от центра Лос-Анджелеса...',
        ];

        for ($i=0; $i <count($names); $i++) { 
            Place::create([
                'name' => $names[$i],
                'description' => $descriptions[$names[$i]],
                'is_visited' => mt_rand(0, 1),
                'rating' => mt_rand(50,100),
            ]);
        }

        return redirect('/places');
    }

    public function update($id) {
        $place = Place::findOrFail($id);
        $place->update([
            'rating' => mt_rand(0, 100),
        ]);

        return redirect('places');
    }

    public function delete($id) {
        $place = Place::findOrFail($id);
        $place->delete();
        return redirect('/places');
    }
}
