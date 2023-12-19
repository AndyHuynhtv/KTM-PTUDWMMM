<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class indexController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function showDetail($id)
    {
        $product = Product::find($id);
        
        if (!$product) {
            return redirect()->back()->with('error', 'Không tìm thấy sản phẩm');
        }

        return view('detailProduct', compact('product'));
    }

    public function product()
    {
        return view('product');
    }

    public function forgotPassword()
    {
        return view('login.forgotPassword');
    }

    
}
