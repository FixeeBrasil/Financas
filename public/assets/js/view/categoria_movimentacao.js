import {editBtn, deleteBtn} from "../common/button.js";
import {openModalCreate} from "../common/modal.js";
import {alert, alertEmpty, alertError, removeErrorModal} from "../common/alert.js";

$(() => {
    var modalId = "#modalCategoriaMovimentacao";
    var formId = "#formCategoriaMovimentacao";
    var tableId = "#categoriaMovimentacaoTable";

    // Carregar tabela com todos os dados
    function carregarCategoriaMovimentacao() {
        $("#tableLoad").show();

        $.ajax({
            type: "GET",
            url: route,
            success: function (response) {
                $("#tableLoad").hide();

                $(tableId + " tbody").empty();

                if (Array.isArray(response.data)) {
                    response.data.forEach(function (data) {

                        var newRow = $('<tr class="text-center" data-id="' + data.id + '">' +
                            '<td>' + data.nome_categoria_movimentacao + '</td>' +
                            '<td>' + data.tipo_movimentacao + '</td>' +
                            '<td>' + editBtn() + deleteBtn() + '</td>' +
                            '</tr>');

                        $(tableId + " tbody").append(newRow);
                    });
                } else {
                    console.error("A propriedade 'data' não é um array na resposta da API:", response);
                }
            },
            error: function (xhr) {
                console.error(xhr.responseText);

                $("#tableLoad").hide();
            }
        });
    }

    carregarCategoriaMovimentacao();

    // Abrir o modal de cadastro
    $(document).on("click", ".createbtn", function () {
        openModalCreate("categoria_movimentacao_id", "", "Categoria", "Movimentação", formId, modalId);
    });

    // Abrir o modal de edição
    $(tableId).on("click", ".editbtn", function () {
        alertEmpty();

        var $row = $(this).closest("tr");
        var dataId = $row.data("id");

        abrirModalEdicao(dataId);
    });

    function abrirModalEdicao(dataId) {
        $.ajax({
            type: "GET",
            url: route + "/" + dataId,
            success: function (response) {
                var data = response.data;

                $(formId)[0].reset();

                $("input[name='categoria_movimentacao_id']").val(data.id);

                $("input[name='nome_categoria_movimentacao']").val(data.nome_categoria_movimentacao);
                $("input[name='tipo_movimentacao']").val(data.tipo_movimentacao);

                $(modalId + " .modal-icon").html("<i class='fa-regular fa-pen-to-square'></i>");
                $(modalId + " .modal-title").text("Editar Categoria");
                $(modalId + " .modal-sub-title").text("Movimentação");
                $(modalId + " button[type='submit']").text("Atualizar");

                $(modalId).modal("show");
            }, error: function (xhr) {
                console.error(xhr.responseText)
            }
        });
    }

    // Formulário PUT/POST
    $(document).on("submit", formId, function (e) {
        e.preventDefault();

        var formData = $(this).serialize();
        var dataId = $("input[name='equipamento_id']").val();

        if (dataId) {
            $.ajax({
                type: "PUT",
                url: route + "/" + dataId,
                data: formData,
                success: function (response) {
                    carregarCategoriaMovimentacao();

                    alert("alert-primary", response.message)

                    $(modalId).modal("hide");
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        alertError(xhr.responseJSON.errors)
                    } else {
                        alert("alert-danger", "Ocorreu um erro na operação!");
                    }
                }
            });
        } else {
            $.ajax({
                type: "POST",
                url: route,
                data: formData,
                success: function (response) {
                    carregarCategoriaMovimentacao();

                    alert("alert-success", response.message);

                    $(modalId).modal("hide");
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        alertError(xhr.responseJSON.errors)
                    } else {
                        alert("alert-danger", "Ocorreu um erro na operação!");
                    }
                }
            });
        }
    });

    // Remover do Banco de Dados
    $(tableId).on("click", ".deletebtn", function () {
        var dataId = $(this).closest("tr").data("id");

        $.ajax({
            type: "DELETE",
            url: route + "/" + dataId,
            success: function (response) {
                $(this).closest("tr").remove();

                alert("alert-warning", response.message);

                carregarCategoriaMovimentacao();
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    alertError(xhr.responseJSON.errors)
                } else {
                    alert("alert-danger", "Ocorreu um erro na operação!");
                }
            }
        });
    });

    // Limpando alert de error do modal
    $(modalId).on("hidden.bs.modal", function () {
        removeErrorModal(modalId)
    });
});
