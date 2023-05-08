<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function artikelView() {
        return view('user/artikel');
    }
    
    public function showArtikelAdmin() {
        return view('admin/listArtikel');
    }

    public function detailArtikel() {
        return view('admin/detailArtikel');
    }

    public function addArtikel() {
        return view('admin/addArtikel');
    }

    
}
