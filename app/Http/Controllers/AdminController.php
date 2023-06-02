<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboardView() {
        $orders = Order::all();
        $users = User::all();

        return view('admin.Dashboard', compact('orders', 'users'));
    }

    public function showProducts() {
        $products = Product::all();

        return view('admin.ListProduct', compact('products'));
    }

    public function addProductView() {
        return view('admin.addProduct');
    }

    public function editProductView(Request $request) {
        $id = $request->id;
        $product = Product::find($id);

        return view('admin.editProduct', compact('product'));
    }

    public function listOrderView() {
        $orders = Order::all();

        return view('admin.listOrder', compact('orders'));
    }

    public function editOrderView(Request $request) {
        $order = Order::find($request->id);

        return view('admin.editOrder', compact('order'));
    }

    public function updateStatus(Request $request) {
        $order = Order::find($request->id);

        $order->status = $request->status;
        $order->save();

        return redirect('admin/listOrders')->with('updateStatusSuccess', 'Status Berhasil Diubah!');
    }
}
