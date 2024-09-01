<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('new_product', compact('categories'));
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'model_number' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            // 'availability' => 'nullable|boolean',
            'product_details' => 'nullable|string',
            'how_to_use' => 'nullable|string',
            'shipping_details' => 'nullable|string',
            'images' => 'required|array',
            'pricing' => 'required|array',
        ]);
        $imageName = [];
        $i = 0;
        if ($request->hasFile('images')) {

            foreach ($request->images as $img) {
                $imageName[$i] = time() . $i . '.'  . $img->extension();
                $img->move(public_path('images'), $imageName[$i]);
                $i++;
            }
        }



        Product::create([
            'name' => $request->name,
            'model_number' => $request->model_number,
            'category' => $request->category,
            'availability' => $request->availability,
            'product_details' => $request->product_details,
            'how_to_use' => $request->how_to_use,
            'shipping_details' => $request->shipping_details,
            'pricing' => $request->pricing,
            'images' => $imageName,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('edit_product', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'model_number' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            // 'availability' => 'required|string',
            'product_details' => 'nullable|string',
            'how_to_use' => 'nullable|string',
            'shipping_details' => 'nullable|string',
            // 'images' => 'required|array',
            'pricing' => 'required|array',
        ]);

        $imageName = [];
        $i = 0;
        if ($request->hasFile('images')) {

            foreach ($request->images as $img) {
                $imageName[$i] = time() . $i . '.'  . $img->extension();
                $img->move(public_path('images'), $imageName[$i]);
                $i++;
            }
        }

        $product->update([
            'name' => $request->name,
            'model_number' => $request->model_number,
            'category' => $request->category,
            'availability' => $request->availability,
            'product_details' => $request->product_details,
            'how_to_use' => $request->how_to_use,
            'shipping_details' => $request->shipping_details,
            'pricing' => $request->pricing,
            'images' => $imageName,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
