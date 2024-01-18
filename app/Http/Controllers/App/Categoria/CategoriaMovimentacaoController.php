<?php

namespace App\Http\Controllers\App\Categoria;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriaMovimentacaoRequest;
use App\Http\Requests\UpdateCategoriaMovimentacaoRequest;
use App\Models\Categoria\CategoriaMovimentacao;

class CategoriaMovimentacaoController extends Controller
{
    public function index()
    {
        $inputHidden = ['name'=> 'categoria_movimentacao_id'];

        return view('app.categoria_movimentacao.categoria_movimentacao_index', compact('inputHidden'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriaMovimentacaoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoriaMovimentacao $categoriaMovimentacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoriaMovimentacao $categoriaMovimentacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriaMovimentacaoRequest $request, CategoriaMovimentacao $categoriaMovimentacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoriaMovimentacao $categoriaMovimentacao)
    {
        //
    }
}
