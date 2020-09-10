<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProdutoController extends Controller
{
    use SoftDeletes;

    public function index()
    {
        $produtos = Produtos::all();
        return view('produtos.index', compact('produtos'));
    }

    public function manipulate($id = null)
    {
        if (empty($id))
            return view('produtos.manipulate');

        $produto = Produtos::find($id);

        return view('produtos.manipulate', compact('produto'));
    }

    public function manipulation($id = null)
    {
        Produtos::updateOrCreate(['id' => $id], request()->except(['_token']));
        return redirect()->route('index_produto');
    }

    public function destroy($id)
    {
        Produtos::find($id)->delete();
        return redirect()->route('index_produto');
    }
}
