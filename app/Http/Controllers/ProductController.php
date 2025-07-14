<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::with('category')->latest()->get();
        return view('admin.product.index', compact('products'));
    }

    public function create() {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'specification' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'nullable|exists:categories,id',
            'image_main' => 'nullable|image',
            'image_detail1' => 'nullable|image',
            'image_detail2' => 'nullable|image',
            'image_detail3' => 'nullable|image',
        ]);

        foreach (['image_main', 'image_detail1', 'image_detail2', 'image_detail3'] as $img) {
            if ($request->hasFile($img)) {
                $file = $request->file($img)->store('products', 'public');
                $validated[$img] = $file;
            }
        }

        Product::create($validated);

        return redirect()->route('product.index')->with('success', 'Product created!');
    }

    public function edit($id) {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'specification' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'nullable|exists:categories,id',
            'image_main' => 'nullable|image',
            'image_detail1' => 'nullable|image',
            'image_detail2' => 'nullable|image',
            'image_detail3' => 'nullable|image',
        ]);

        foreach (['image_main', 'image_detail1', 'image_detail2', 'image_detail3'] as $img) {
            if ($request->hasFile($img)) {
                $file = $request->file($img)->store('products', 'public');
                $validated[$img] = $file;
            }
        }

        $product->update($validated);

        return redirect()->route('product.index')->with('success', 'Product updated!');
    }

    public function destroy($id) {
        Product::destroy($id);
        return back()->with('success', 'Product deleted!');
    }
}
