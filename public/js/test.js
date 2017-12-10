var isValidateFio = false;
var isValidateAnswer2 = false;

var regexFio = /^[\wа-яё]+\s+[\wа-яё]+\s+[\wа-яё]+$/i;
$("#form_fio").change(function () {
    isValidateFio = validateField($(this), regexFio, "Ф.И.О. должно состоять из трёх слов", isValidateFio);
    activeSubmitButton();
});

var regexAnswer2 = /^\d+\.\d+$/i;
$("#form_answer2").change(function () {
    isValidateAnswer2 = validateField($(this), regexAnswer2, "Ответ должен быть вещественным числом");
    activeSubmitButton();
});

$("select").change(function () {
    activeSubmitButton();
});

$("input[type=checkbox]").click(function () {
    activeSubmitButton();
});

function activeSubmitButton() {
    var answerCheckbox31 = $("#form_answer31").prop("checked");
    var answerCheckBox32 = $("#form_answer32").prop("checked");
    var group = $("#form_group :selected").val();
    var answerSelect1 = $("#form_answer1 :selected").val();
    if (isValidateFio && isValidateAnswer2 && (answerCheckbox31 || answerCheckBox32)
        && group != "error" && answerSelect1 != "error") {
        $("#submit").prop("disabled", false);
    } else {
        $("#submit").prop("disabled", true);
    }
}

$("#reset").on("click", function () {
    displayModalWindow("Вы действительно хотите очистить форму?", function () {
        $("#form")[0].reset();
    });
});