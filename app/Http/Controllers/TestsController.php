<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function test() {
        return 'Страница для теста';
    }

    public function success() {
        return 'Тест успешно сдан, ваш балл = ' . mt_rand(75, 100);
    }

    public function fail() {
        return 'Тест провален, ваш балл = ' . mt_rand(0, 74);
    }
}
