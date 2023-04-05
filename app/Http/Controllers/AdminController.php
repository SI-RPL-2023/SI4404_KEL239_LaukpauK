<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboardView() {
        return view('admin/Dashboard');
    }

    public function showProducts() {
        $products = Product::all();

        return view('admin/ListProduct', compact('products'));
    }

    public function addProductView() {
        return view('admin/addProduct');
    }

    public function editProductView(Request $request) {
        $id = $request->id;
        $product = Product::find($id);

        return view('admin/editProduct', compact('product'));
    }
}
