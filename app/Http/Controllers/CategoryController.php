<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function create()
    {
        return view('new_category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
        }

        Category::create([
            'name' => $request->name,
            'image' => $imageName,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('edit_category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $category = Category::findOrFail($id);
        $imageName = $category->image;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
        }

        $category->update([
            'name' => $request->name,
            'image' => $imageName,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
