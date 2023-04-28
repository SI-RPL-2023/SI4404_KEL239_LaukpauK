<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        File::delete('storage/'.$product->gambar_produk);
        $product->delete();
        
        return redirect()->back()->with('deleteSuccess', 'Produk berhasil dihapus!');
    }

    public function updateProduct(Request $request) {
        $id = $request->id;
        $product = Product::find($id);
        
        if ($request->hasFile('gambar_produk')) {
            $extension = $request->file('gambar_produk')->getClientOriginalExtension();
            $new_name = $request->nama_produk . '-' . now()->format('Y-m-d') . '.' . $extension;
            $img = $request->file('gambar_produk')->storeAs('fotoProduk', $new_name);
            $product->gambar_produk = $img;
        }

        
        $product->nama_produk = $request->nama_produk;
        $product->harga = $request->harga;
        $product->stock = $request->stock;
        $product->deskripsi = $request->deskripsi;
        $product->kategori = $request->kategori;
        
        $product->save();
        return redirect('/admin/listProduct')->with('updateSuccess', 'Produk Berhasil Diubah!');
        File::delete('storage/'.$product->gambar_produk);
    }
}
