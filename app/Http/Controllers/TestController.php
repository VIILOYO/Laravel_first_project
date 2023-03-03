<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
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

    public function create() {
        $test = [
            'name' => 'Тест создан'
        ];
        Test::create($test);
        return redirect('/tests');
    }

    public function update($id) {
        $test = Test::findOrFail($id);
        $test->update([
            'name' => 'Обновлен',
            'is_active' => 0,
        ]);
        return redirect('/tests');
    }

    public function delete($id) {
        $test = Test::findOrFail($id);
        $test->delete();
        return redirect('/tests');
    }
}
