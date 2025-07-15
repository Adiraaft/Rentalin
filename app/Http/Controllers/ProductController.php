<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'specification' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image_thumbnail' => 'nullable|image',
            'image_main' => 'required|image',
            'image_detail1' => 'required|image',
            'image_detail2' => 'required|image',
            'image_detail3' => 'required|image',
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->specification = $request->specification;
        $product->price = $request->price;
        $product->stock = $request->stock;

        if ($request->hasFile('image_thumbnail')) {
            $product->image_thumbnail = $request->file('image_thumbnail')->store('products', 'public');
        }
        $product->image_main = $request->file('image_main')->store('products', 'public');
        if ($request->hasFile('image_detail1')) {
            $product->image_detail1 = $request->file('image_detail1')->store('products', 'public');
        }
        if ($request->hasFile('image_detail2')) {
            $product->image_detail2 = $request->file('image_detail2')->store('products', 'public');
        }
        if ($request->hasFile('image_detail3')) {
            $product->image_detail3 = $request->file('image_detail3')->store('products', 'public');
        }

        $product->save();

        return redirect()->route('products.create')->with('alert', [
            'type' => 'success',
            'message' => 'Produk berhasil ditambah!'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'specification' => 'nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image_thumbnail' => 'nullable|image',
            'image_main' => 'nullable|image',
            'image_detail1' => 'nullable|image',
            'image_detail2' => 'nullable|image',
            'image_detail3' => 'nullable|image',
        ]);

        $product = Product::findOrFail($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->specification = $request->specification;
        $product->price = $request->price;
        $product->stock = $request->stock;


        if ($request->hasFile('image_thumbnail')) {
            $product->image_thumbnail = $request->file('image_thumbnail')->store('products', 'public');
        }
        if ($request->hasFile('image_main')) {
            $product->image_main = $request->file('image_main')->store('products', 'public');
        }
        if ($request->hasFile('image_detail1')) {
            $product->image_detail1 = $request->file('image_detail1')->store('products', 'public');
        }
        if ($request->hasFile('image_detail2')) {
            $product->image_detail2 = $request->file('image_detail2')->store('products', 'public');
        }
        if ($request->hasFile('image_detail3')) {
            $product->image_detail3 = $request->file('image_detail3')->store('products', 'public');
        }

        $product->save();
        return redirect()->route('products.index')->with('alert', [
            'type' => 'success',
            'message' => 'Produk berhasil diperbarui!'
        ]);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }

    public function show($id)
    {
        abort(404); // atau redirect
    }

    public function showAll()
    {
        $products = Product::latest()->get();
        return view('product.product', compact('products'));
    }
    public function showDetail($id)
    {
        $product = Product::findOrFail($id);
        return view('product.detailproduct', compact('product'));
    }
 }
