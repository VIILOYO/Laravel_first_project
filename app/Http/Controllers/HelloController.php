<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello() {
        return 'Страница для передачи приветов';
    }

    public function user($id) {
        return "Привет, User, твой id - $id";
    }

    public function name($name, $id) {
        $name = ucfirst(strtolower($name));
        return "Привет, $name, твой id = $id";
    }
}
