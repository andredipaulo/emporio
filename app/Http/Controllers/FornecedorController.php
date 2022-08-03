<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function create(){
        return view('fornecedor.create');
    }
}
