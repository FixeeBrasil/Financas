export function alert(c, m) {
    $("#alert-response").removeClass("alert-success alert-primary alert-warning").addClass(c).text(m).show();
}

export function alertError(e) {
    var errors = e;
    for (var field in errors) {
        var message = errors[field][0] + "\n";
        break;
    }
    $("#alert-error").addClass("alert-danger").text(message).show();
}

export function removeErrorModal(modalId) {
    $(modalId + " #alert-error").removeClass("alert-danger").empty().hide();
}

export function alertEmpty() {
    $("#alert-response").empty().hide();
}
