@extends('layouts.app')

@section('content')
    <x-alert id="alert-response"/>

    <x-table titleTable="Categorias de Movimentação" createBtn="Nova categoria" idTable="categoriaMovimentacaoTable">
        <x-slot name="slot">
            <tr class="text-center">
                <th class="text-secondary text-xxs font-weight-bolder opacity-7">Categoria</th>
                <th class="text-secondary text-xxs font-weight-bolder opacity-7">Tipo de movimentação</th>
                <th class="text-secondary text-xxs font-weight-bolder opacity-7">Ações</th>
            </tr>
        </x-slot>
    </x-table>

    <script>
        var route = "{{ route('categoria-movimentacao.index') }}";
    </script>

    <script type="module" src="{{asset('assets/js/view/categoria_movimentacao.js')}}"></script>
    @include('app.categoria_movimentacao.categoria_movimentacao_modal')
@endsection
