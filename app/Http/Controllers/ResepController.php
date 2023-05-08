<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function detailResepView() {
        return view('user/detailResep');
    }

    public function showResep() {
        return view('user/resep');
    }

    public function showResepAdmin() {
        return view('admin/listResep');
    }

    public function detailResep() {
        return view('admin/detailResep');
    }

    public function addResep() {
        return view('admin/addResep');
    }

    
}
