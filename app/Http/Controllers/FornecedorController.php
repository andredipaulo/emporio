<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use http\Header;
use Illuminate\Http\Request;
use Itstructure\GridView\DataProviders\EloquentDataProvider;
use phpDocumentor\Reflection\Location;

class FornecedorController extends Controller
{
    public function create(Request $request){
        return view('fornecedor.create');
    }

    public function read(){
        $fornecedores = new EloquentDataProvider(Fornecedor::query());
        return view('fornecedor.read', [
            'dataProvider' => $fornecedores
        ]);
    }

    public function update(Request $request, $id){
        if (($request->nome != "") &&
            ($request->ddd != "") &&
            ($request->telefone != "") &&
            ($request->email != "") ) {

            $fornecedor = Fornecedor::findOrFail($id);
            $fornecedor->update([
                'nome' => $request->nome,
                'ddd' => $request->ddd,
                'telefone' => $request->telefone,
                'email' => $request->email,
            ]);

            $fornecedores = new EloquentDataProvider(Fornecedor::query());
            return view('fornecedor.read', [
                'dataProvider' => $fornecedores
            ]);

        }else {
            $fornecedor = Fornecedor::findOrFail($id);
            return view('fornecedor.show', ['fornecedor' => $fornecedor]);
        }

    }

    public function delete($id)
    {
        $fornecedor = Fornecedor::findOrfail($id);
        $fornecedor->delete();

        $fornecedores = new EloquentDataProvider(Fornecedor::query());
        return view('fornecedor.read', [
            'dataProvider' => $fornecedores
        ]);
    }

    /**
    **
    */
    public function show($id){
        $fornecedor = Fornecedor::findOrFail($id);
        return view('fornecedor.show', ['fornecedor' => $fornecedor]);
    }

    public function edit($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        return view('fornecedor.edit', ['fornecedor' => $fornecedor]);
    }

    public function save(Request $request){
        if (($request->nome != "") &&
            ($request->ddd != "") &&
            ($request->telefone != "") &&
            ($request->email != "") ) {

            Fornecedor::create([
                'nome' => $request->nome,
                'ddd' => $request->ddd,
                'telefone' => $request->telefone,
                'email' => $request->email,
            ]);

            $fornecedores = new EloquentDataProvider(Fornecedor::query());

            return view('fornecedor.read', [
                'dataProvider' => $fornecedores
            ]);

        }else{
            echo  "<script>alert('Campos não foram preenchidos, corretamente');</script>";
            return view('fornecedor.create');
        }
    }
}
