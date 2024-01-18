<?php

namespace App\Http\Controllers\Home\Categoria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaMovimentacaoInputController extends Controller
{
    public function index()
    {
        $inputHidden = ['name' => 'categoria_movimentacao_id'];

        return view('app.categoria_movimentacao.categoria_movimentacao_index', compact('inputHidden'));
    }
}
