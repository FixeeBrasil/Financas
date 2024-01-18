$(document).ready(function() {
    $("#inputPesquisarTabela").on("keyup", function() {
        var tablelist = $(this).val().toLowerCase();

        $("#pesquisarNaTabela tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(tablelist) > -1);
        });
    });
});
