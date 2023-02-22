<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Test;
use Illuminate\View\View;

class TestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('tests.index', ['tests' => Test::where('is_active', 1)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->only(['title', 'description']);
        $test = Test::create($data);

        return redirect("tests/$test->id");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        return view('tests.show', ['test' => Test::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        return view('tests.edit', ['test' => Test::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $data = $request->only('title', 'description');
        Test::findOrFail($id)->update($data);

        return redirect("tests/$id");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Test::findOrFail($id)->delete();
        return redirect()->route('tests.index');
    }
}
