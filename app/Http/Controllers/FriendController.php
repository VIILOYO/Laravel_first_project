<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Friend;

class FriendController extends Controller
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

    public function create() {
        $friend = [
            'first_name' => 'Pukpuk',
            'last_name' => 'Pukpukich',
            'age' => mt_rand(20,50),
            'ia_alive' => 1,
        ];
        Friend::create($friend);

        return redirect('/friends');
    }

    public function die($id) {
        $friend = Friend::findOrFail($id);
        $friend->update(['ia_alive' => 0]);
        return redirect('/friends');
    }

    public function delete($id) {
        $friend = Friend::findOrFail($id);
        $friend->delete();
        return redirect('/friends');
    }
}
