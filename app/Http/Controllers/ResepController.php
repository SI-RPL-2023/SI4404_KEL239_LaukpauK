<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ResepController extends Controller
{
    public function detailResepAdmin(Request $request) {
        $recipe = Recipe::where('slug', $request->slug)->with('users')->first();
        
        return view('admin.detailResep', compact('recipe'));
    }
    
    public function showResep(Request $request) {
        $recipes = Recipe::all();

        if(isset($request->kategori)) {
            $recipes = Recipe::where('kategori', $request->kategori)->get();
            
            return view('user.resep', compact('recipes'));
        };
        
        return view('user.resep', compact('recipes'));
    }

    public function detailResepUser(Request $request) {
        $recipe = Recipe::where('slug', $request->slug)->with('users')->first();
        
        return view('user.detailResep', compact('recipe'));
    }

    public function showResepAdmin() {
        $recipes = Recipe::where('user_id', auth()->user()->id)->with('users')->get();

        return view('admin.listResep', compact('recipes'));
    }

    public function detailResep() {
        return view('user.detailResep');
    }

    public function addResepView() {
        return view('admin.addResep');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Recipe::class, 'slug', $request->judul);

        return response()->json(['slug' => $slug]);
    }

    public function addResep(Request $request) {
        $validated_data = $request->validate([
            'judul' => 'required',
            'slug' => 'required|unique:recipes',
            'kategori' => 'required',
            'isi_resep' => 'required'
        ]);
        
        if ($request->hasFile('gambar_resep')) {
                $extension = $request->file('gambar_resep')->getClientOriginalExtension();
                $new_name = $request->judul . '-' . now()->format('Y-m-d') . '.' . $extension;
                $img = $request->file('gambar_resep')->storeAs('fotoResep', $new_name);
                $validated_data['gambar_resep'] = $img;
        }

        $validated_data['user_id'] = auth()->user()->id;

        Recipe::create($validated_data);

        return redirect('/admin/listResep')->with('saveSuccess', 'Resep berhasil dibuat!');
    }

    public function editResepView(Request $request) {
        $recipe = Recipe::where('slug', $request->slug)->first();
        // dd($article);
        return view('admin.editResep', compact('recipe'));
    } 

    public function updateResep(Request $request) {
        $id = $request->id;
        $recipe = Recipe::find($id);
        
        if ($request->hasFile('gambar_resep')) {
            $extension = $request->file('gambar_resep')->getClientOriginalExtension();
            $new_name = $request->nama_produk . '-' . now()->format('Y-m-d') . '.' . $extension;
            $img = $request->file('gambar_resep')->storeAs('fotoResep', $new_name);
            $recipe->gambar_resep = $img;
        }

        
        $recipe->judul = $request->judul;
        $recipe->slug = $request->slug;
        $recipe->kategori = $request->kategori;
        $recipe->isi_resep = $request->isi_resep;
        
        $recipe->save();
        return redirect('/admin/listResep')->with('updateSuccess', 'Resep Berhasil Diubah!');
        File::delete('storage/'.$recipe->gambar_resep);
    }

    public function deleteResep(Request $request){
        $recipe = Recipe::find($request->id);

        File::delete('storage/'.$recipe->gambar_resep);
        $recipe->delete();
        
        return redirect()->back()->with('deleteSuccess', 'Resep berhasil dihapus!');
    }
}
