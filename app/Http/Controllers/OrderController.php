<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderDetailView(Request $request) {
        $order = Order::where('id_user', auth()->user()->id)
                        ->where('id', $request->id)
                        ->with('users')
                        ->first();

        $order_detail = OrderDetail::where('id_order', $order->id)->with('products')->get();

        return view('user.orderDetail', compact('order_detail'));
    }

    public function statusOrderView() {
        $orders = Order::where('id_user', auth()->user()->id)->with('users')->get();

        return view('user.statusOrder', compact('orders'));
    }

    public function tambahPesanan(Request $request) {
        $data = $request->all();

        $user = User::find($data['id_user']);
        $carts = Cart::where('id_user',$user->id)->get();

        if ($request->hasFile('bukti_bayar')) {
            $extension = $request->file('bukti_bayar')->getClientOriginalExtension();
            $new_name = $user->nama_lengkap . '-' . now()->format('Y-m-d') . '.' . $extension;
            $img = $request->file('bukti_bayar')->storeAs('buktiPembayaran', $new_name);
            // $request->file('image')->storeAs('/', 'x.jpg', 'images')
            $order = Order::create([
                'id_user' => $user->id,
                'total_price' => $data['total_price'],
                'bukti_bayar' => $img
            ]);
        }

        if($order){
            foreach ($carts as $cart) {
                OrderDetail::create([
                    'id_product' => $cart->id_product,
                    'id_order' => $order->id,
                    'jumlah' => $cart->jumlah
                ]);
                $cart->delete();
            }
        }

        return redirect('/orders')->with('addCartSuccess', 'Keranjang berhasil ditambahkan');
    }
}
