<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Category List";
        $categories = Category::with('parent')->where('is_delete', 0)->get();
        
        return view('admin.category.index', [
            'title' => $title,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('is_delete', 0)->get();
        return view('admin.category.add', [
            'title' => 'Add New Category',
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        $name = $request->input('name');
        $description = $request->input('description');
        $slug = $request->input('slug') ?: Str::slug($name);
        $parent_id = $request->input('parent_id') ?: null;
        $is_active = $request->has('is_active') ? 1 : 0;
        
        Category::create([
            'name' => $name,
            'description' => $description,
            'slug' => $slug,
            'parent_id' => $parent_id,
            'is_active' => $is_active,
            'is_delete' => 0,
        ]);
        
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::with('parent')->find($id);
        return view('admin.category.detail', ['category' => $category, 'title' => 'Category Detail']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        $categories = Category::where('is_delete', 0)->get();
        return view('admin.category.edit', [
            'category' => $category, 
            'title' => 'Edit Category',
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:categories,id|different:id',
        ]);

        // Additional validation to prevent setting self as parent
        if ($request->parent_id == $id) {
            return redirect()->back()->withErrors(['parent_id' => 'A category cannot be its own parent.']);
        }

        $category = Category::find($id);
        
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->slug = $request->input('slug') ?: Str::slug($request->input('name'));
        $category->parent_id = $request->input('parent_id') ?: null;
        $category->is_active = $request->has('is_active') ? 1 : 0;
        
        $category->save();

        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->is_delete = 1;
        $category->save();
        
        return redirect('/category');
    }
}
