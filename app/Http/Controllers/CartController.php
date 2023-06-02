<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartView() {
        $id_user = auth()->user()->id;
        $carts = Cart::where('id_user', $id_user)->get();

        $products = Cart::where('id_user', $id_user)->with('products')->get();

        return view('user.cart', compact('carts', 'products'));
    }

    public function addCart(Request $request) {
        $data = $request->all();
        $product = Product::find($data['id']);

        $id_user = auth()->user()->id;
        $user = Cart::where('id_user', $id_user)->where('id_product',$product->id)->first();

        if($user){
            $user->jumlah += $data['jumlah'];
            $product->stock = $product->stock - $data['jumlah'];

            $user->total_price += ($data['jumlah'] * $product->harga);

            $product->save();
            $user->save();
            return redirect()->back()->with('addCartSuccess', 'Produk Berhasil Ditambahkan Ke Keranjang!');
        }
        
        Cart::create([
            'id_product' => $data['id'],
            'jumlah' => $data['jumlah'],
            'id_user' => $id_user,
            'total_price' => $data['jumlah'] * $product->harga
        ]);

        $product->stock = $product->stock - $data['jumlah'];
        $product->save();

        return redirect()->back()->with('addCartSuccess', 'Produk Berhasil Ditambahkan Ke Keranjang!');
    }

    public function deleteCart($id) {
        $cart = Cart::find($id);
        $jumlah = $cart->jumlah;
        
        $cart->products['stock'] += $jumlah;

        $cart->products->save();
        $cart->delete();

        return redirect()->back()->with('deleteCartSuccess', 'Keranjang berhasil dihapus');
    }
}
