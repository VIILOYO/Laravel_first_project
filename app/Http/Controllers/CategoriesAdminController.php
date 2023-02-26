<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Category;
use Illuminate\View\View;
use App\Http\Requests\StoreCategoryRequest;



class CategoriesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('categories.admin.index', ['categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('categories.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $data = $request->only('slug', 'title', 'description');
        $category = Category::firstOrCreate($data);

        return redirect()->route('categories.slug', [$category->slug]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        return view('categories.admin.show', ['category' => Category::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        return view('categories.admin.edit', ['category' => Category::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryRequest $request, string $id): RedirectResponse
    {   
        $validated = $request->validated();

        $data = $request->only('slug', 'title', 'description');
        Category::findOrFail($id)->update($data);

        return redirect()->route('categories.slug', [Category::findOrFail($id)->slug]);
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
