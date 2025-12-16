<?php

namespace App\Http\Controllers;
use App\Models\Dashboard;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    public function index(){
        return view('frontend.cart');
    } 

    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->p_name,
                'price' => $product->price,
                'quantity' => 1,
                'color' => $product->color,
                'size' => $product->p_name,
            ];
        }

        session()->put('cart', $cart);
        
        return redirect()->route('frontend.cart');
    }

    public function update(Request $request)
{
    $cart = session()->get('cart');

    $cart[$request->id]['quantity'] = $request->quantity;

    session()->put('cart', $cart);

    return redirect()->back();
}

public function remove($id)
{
    $cart = session()->get('cart');

    unset($cart[$id]);

    session()->put('cart', $cart);

    return redirect()->back();
}
}
