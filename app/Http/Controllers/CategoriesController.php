<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Category;
use Illuminate\View\View;


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
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'slug' => 'required|min:4|max:50|unique:categories',
            'title' => 'required|min:5|max:128',
        ],
        [
           'slug.required' => 'Короткий URL не указан',
           'slug.min' => 'Короткий URL меньше 4 символов',
           'slug.max' => 'Короткий URL больше 50 символов',
           'slug.unique' => 'Короткий URL не уникален',
           'title.required' => 'Заголовок не указан',
           'title.min' => 'Заголовок меньше 5 символов',
           'title.max' => 'Заголовок больше 128 символов',
        ]);

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
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'slug' => "required|min:4|max:50|unique:categories,slug,$id",
            'title' => 'required|min:5|max:128',
        ],
        [
           'slug.required' => 'Короткий URL не указан',
           'slug.min' => 'Короткий URL меньше 4 символов',
           'slug.max' => 'Короткий URL больше 50 символов',
           'slug.unique' => 'Короткий URL не уникален',
           'title.required' => 'Заголовок не указан',
           'title.min' => 'Заголовок меньше 5 символов',
           'title.max' => 'Заголовок больше 128 символов',
        ]);

        $data = $request->only('slug', 'title', 'description');
        Category::findOrFail($id)->update($data);

        return redirect()->route('categories.show', [Category::findOrFail($id)]);
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
