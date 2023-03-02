<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Friend;

class FriendsController extends Controller
{
    public function index() {
        $friends = Friend::where('ia_alive', 1)->orderByDesc('age')->get();

        foreach ($friends as $friend) {
            echo "$friend->first_name $friend->last_name<br>";
            echo "$friend->age<hr>";
        }
    }

    public function friend($id) {
        $friend = Friend::findOrFail($id);
        return "Привет, $friend->first_name $friend->last_name<br>$friend->age";
    }

    public function deadPeople() {
        $friends = Friend::where('ia_alive', 0)->get();

        foreach ($friends as $friend) {
            echo "$friend->first_name $friend->last_name<br>";
            echo "$friend->age<hr>";
        }
    }

}
