<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function artikelView() {
        $articles = Article::all();

        return view('user/artikel', compact('articles'));
    }

    public function detailArtikelUser(Request $request) {
        $article = Article::where('slug', $request->slug)->with('users')->first();
        
        return view('user/detailArtikel', compact('article'));
    }
    
    public function showArtikelAdmin() {
        $articles = Article::where('user_id', auth()->user()->id)->with('users')->get();

        return view('admin/listArtikel', compact('articles'));
    }

    public function detailArtikel(Request $request) {
        $article = Article::where('slug', $request->slug)->with('users')->first();
        // dd($article);
        return view('admin/detailArtikel', compact('article'));
    }

    public function addArtikelView() {
        return view('admin/addArtikel');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Article::class, 'slug', $request->judul);

        return response()->json(['slug' => $slug]);
    }

    public function addArtikel(Request $request) {
        $validated_data = $request->validate([
            'judul' => 'required',
            'slug' => 'required|unique:articles',
            'isi_artikel' => 'required'
        ]);
        
        if ($request->hasFile('gambar_artikel')) {
                $extension = $request->file('gambar_artikel')->getClientOriginalExtension();
                $new_name = $request->judul . '-' . now()->format('Y-m-d') . '.' . $extension;
                $img = $request->file('gambar_artikel')->storeAs('fotoArtikel', $new_name);
                $validated_data['gambar_artikel'] = $img;
        }
            
        $validated_data['user_id'] = auth()->user()->id;

        Article::create($validated_data);

        return redirect('/admin/listArtikel')->with('saveSuccess', 'Artikel berhasil dibuat!');
    }

    public function editArticleView(Request $request) {
        $article = Article::where('slug', $request->slug)->first();
        // dd($article);
        return view('admin/editArtikel', compact('article'));
    } 

    public function updateArticle(Request $request) {
        $id = $request->id;
        $article = Article::find($id);
        
        if ($request->hasFile('gambar_artikel')) {
            $extension = $request->file('gambar_artikel')->getClientOriginalExtension();
            $new_name = $request->nama_produk . '-' . now()->format('Y-m-d') . '.' . $extension;
            $img = $request->file('gambar_artikel')->storeAs('fotoArtikel', $new_name);
            $article->gambar_artikel = $img;
        }

        
        $article->judul = $request->judul;
        $article->slug = $request->slug;
        $article->isi_artikel = $request->isi_artikel;
        
        $article->save();
        return redirect('/admin/listArtikel')->with('updateSuccess', 'Artikel Berhasil Diubah!');
        File::delete('storage/'.$article->gambar_artikel);
    }

    public function deleteArticle(Request $request) {
        $id = $request->id;
        $article = Article::find($id);

        File::delete('storage/'.$article->gambar_artikel);
        $article->delete();
        
        return redirect()->back()->with('deleteSuccess', 'Artikel berhasil dihapus!');
    }
}
