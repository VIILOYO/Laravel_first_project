<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Category;
use Illuminate\View\View;
use App\Http\Requests\StorePostRequest;



class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('categories.index', ['categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $data = $request->only('slug', 'title', 'description');
        $category = Category::firstOrCreate($data);

        return redirect()->route('categories.show', [$category->slug]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug): View
    {
        return view('categories.show', ['category' => Category::firstWhere('slug', $slug)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        return view('categories.edit', ['category' => Category::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, string $id): RedirectResponse
    {   
        $validated = $request->validated();

        $data = $request->only('slug', 'title', 'description');
        Category::findOrFail($id)->update($data);

        return redirect()->route('categories.show', [Category::findOrFail($id)->slug]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Category::findOrFail($id)->delete();

        return redirect()->route('categories.index');
    }
}
