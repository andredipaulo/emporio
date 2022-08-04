<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use http\Header;
use Illuminate\Http\Request;
use Itstructure\GridView\DataProviders\EloquentDataProvider;
use phpDocumentor\Reflection\Location;

class FornecedorController extends Controller
{
    public function read(){

        $fornecedores = new EloquentDataProvider(Fornecedor::query());
        return view('fornecedor.read', [
            'dataProvider' => $fornecedores
        ]);
    }

    public function create(){
        return view('fornecedor.create');
    }

    public function store(Request $request){
        Fornecedor::create([
           'nome' => $request->nome,
           'ddd' => $request->ddd,
           'telefone' => $request->telefone,
           'email' => $request->email,
        ]);

        return "fornecedor criado com sucesso!";
    }

    public function show($id){
        $fornecedor = Fornecedor::findOrFail($id);
        return view('fornecedor.show', ['fornecedor' => $fornecedor]);
    }

    public function edit($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        return view('fornecedor.edit', ['fornecedor' => $fornecedor]);
    }

    public function update(Request $request, $id){
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->update([
            'nome' => $request->nome,
            'ddd' => $request->ddd,
            'telefone' => $request->telefone,
            'email' => $request->email,
        ]);

        return back();
    }

    public function delete($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        return view('fornecedor.delete', ['fornecedor' => $fornecedor]);
    }

    public function destroy($id){
        $fornecedor = Fornecedor::findOrfail($id);
        $fornecedor->delete();

        return "Registro excluído com sucesso!";
    }
}
