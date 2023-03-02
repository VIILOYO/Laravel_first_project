<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestsController extends Controller
{
    public function index() {
        $tests = Test::where('is_active', 1)->orderByDesc('count')->get();

        foreach($tests as $test) {
            echo "$test->name<br>$test->description<br>";
            echo "Количество повторений: $test->count<hr>";
        }   
    }

    public function test($id) {
        $test = Test::findOrFail($id);
        return "$test->name<br>$test->description<br>Повторений: $test->count";
    }
}
