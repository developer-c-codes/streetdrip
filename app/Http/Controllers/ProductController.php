<?php

namespace App\Http\Controllers;
use App\Models\Dashboard;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{   

    public function index(){
        return view('products.addproducts');
    }

     public function store(Request $request){
        $validated = $request->validate([
            'p_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'size' => 'required|string|max:50',
            'color' => 'required|string|max:50',
        ]);

        Product::create($validated);  

         return redirect()->route('product.listproduct')->with('success', 'Product added successfully!');
     }      

      public function list() {
        $products = Product::all();
        return view('products.listproduct', compact('products'));
      }

      public function edit($id){
        $product = Product::findOrFail($id);
        return view('products.editproduct', compact('product'));
      }

      public function update(Request $request, $id){
        $validated = $request->validate([
            'p_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'size' => 'required|string|max:50',
            'color' => 'required|string|max:50',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validated);

        return redirect()->route('product.listproduct')->with('success', 'Product updated successfully!');
      }

      public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.listproduct')->with('success', 'Product deleted successfully!');
      }

      public function home()
    {
        $products = Product::latest()->get();
        return view('frontend.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('frontend.product', compact('product'));
    }

}