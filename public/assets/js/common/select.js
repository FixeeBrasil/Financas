// Categoria Movimentação
export function selectCategoriaTreino() {
    $.ajax({
        type: "GET",
        url: "/api/treinos/cadastro-treino/categoria-treino",
        success: function (response) {
            var select = $("#categoria_treino_id");

            select.empty();

            if (Array.isArray(response.data)) {
                select.append('<option selected disabled>Selecione uma categoria</option>');
                response.data.forEach(function (categoria) {
                    var option = $('<option></option>').attr('value', categoria.id).text(categoria.nome_categoria_treino);
                    select.append(option);
                });
            } else {
                console.error("A propriedade 'data' não é um array na resposta da API:", response);
            }
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        }
    });
}
