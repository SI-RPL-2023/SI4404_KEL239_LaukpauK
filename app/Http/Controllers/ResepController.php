<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function detailResepView() {
        return view('user/detailResep');
    }

    public function resepView() {
        return view('user/resep');
    }
}
