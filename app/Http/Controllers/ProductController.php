<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    public function create(Request $request)
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $newProduct = new Product();
        $newProduct->name = $data['name'];
        $newProduct->description = $data['description'];
        $newProduct->price = $data['price'];
        $newProduct->img = $data['img'];
        $newProduct->save();

        return redirect()->route('products.show', ['id' => $newProduct->id]);

    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {

        $data = $request->all();

        $newProduct = Product::findOrFail($id);

        $newProduct->name = $data['name'];
        $newProduct->description = $data['description'];
        $newProduct->price = $data['price'];
        $newProduct->img = $data['img'];
        $newProduct->update();

        return redirect()->route('products.show', ['id' => $id]);

    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('products.index');
    }
}
