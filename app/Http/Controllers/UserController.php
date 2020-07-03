<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function product()
    {
        $product_list = Product::orderBy('product_name', 'asc')->paginate(5);
        $jumlah_product = Product::count();
        return view('user.product.product', compact('product_list', 'jumlah_product'));
    }

    public function detail_product(Product $product)
    {
        return view('user.product.detail_product', compact('product'));
    }

}
