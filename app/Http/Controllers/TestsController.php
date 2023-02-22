<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestsController extends Controller
{
    public function index() {
        return view('tests.index', ['tests' => Test::where('is_active', 1)->get()]);
    }

    public function create() {
        return view('tests.create');
    }

    public function store(Request $request) {
        $data = $request->only(['title', 'description']);
        $test = Test::create($data);

        return redirect("tests/$test->id");
    }

    public function show($id) {
        return view('tests.show', ['test' => Test::findOrFail($id)]);
    }

    public function destroy($id) {
        Test::findOrFail($id)->delete();
        return redirect()->route('tests.index');
    }

    public function edit($id) {
        return view('tests.edit', ['test' => Test::findOrFail($id)]);
    }

    public function update($id, Request $request) {
        $data = $request->only('title', 'description');
        Test::findOrFail($id)->update($data);

        return redirect("tests/$id");
    }
}
