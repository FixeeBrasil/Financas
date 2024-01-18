import {alertEmpty} from "./alert.js";

export function openModalCreate(input, value = null, text, subtext, formId, modalId) {
    alertEmpty();

    $(formId)[0].reset();

    $("input[name=" + input + "]").val(value);

    $(modalId + " .modal-icon").html("<i class='fa-solid fa-plus-minus'></i>");
    $(modalId + " .modal-title").text("Cadastrar " + text);
    $(modalId + " .modal-sub-title").text(subtext);
    $(modalId + " button[type='submit']").text("Salvar Registro");

    $(modalId).modal("show");
}
