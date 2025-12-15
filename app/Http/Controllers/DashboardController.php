<?php

namespace App\Http\Controllers;
use App\Models\Dashboard;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index()
    {
        $totalProducts = Product::count();             // total products
        $totalStock = Product::sum('stock');          // total stock across all products

        return view('dashboard', compact('totalProducts', 'totalStock'));
    }

}