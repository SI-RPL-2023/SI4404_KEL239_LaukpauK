<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function saveProduct(Request $request) {
        $data = $request->all();

        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'gambar_produk' => 'required',
            'kategori' => 'required',
            'stock' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            ]
        );

        if($request->hasFile('gambar_produk')) {
            $extension = $request->file('gambar_produk')->getClientOriginalExtension();
            $new_name = $request->nama_produk . '-' . now()->format('Y-m-d') . '.' . $extension;
            $img = $request->file('gambar_produk')->storeAs('fotoProduk', $new_name);
            $validatedData['gambar_produk'] = $img;
        }

        Product::create($validatedData);

        return redirect('/admin/listProduct')->with('saveSuccess', 'Produk berhasil ditambahkan!');
    }

    public function deleteProduct(Request $request) {
        $id = $request->id;
        $product = Product::find($id);

        // Storage::disk('public')->delete($product->image);
        $product->delete();
        
        return redirect()->back()->with('deleteSuccess', 'Produk berhasil dihapus');
    }
}
