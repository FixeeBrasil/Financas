<x-modal id="modalCategoriaMovimentacao" formId="formCategoriaMovimentacao" :inputHidden="$inputHidden">
    {{-- Categoria Movimentacao --}}
    <div class="row mb-3">
        <x-input col="6" type="text" id="categoria_movimentacao" name="categoria_movimentacao" placeholder="Salário, vale refeição .."></x-input>
    </div>
    <div class="input-group d-flex flex-column-reverse">
        <x-input-radio name="tipo_movimentacao" id="despesa" value="1" text="Despesa"></x-input-radio>
        <x-input-radio name="tipo_movimentacao" id="entrada" value="2" text="Entrada"></x-input-radio>
        <x-input-radio name="tipo_movimentacao" id="investimento" value="3" text="Investimento"></x-input-radio>
    </div>
</x-modal>
