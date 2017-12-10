var isValidateFio = false;
var isValidateDate = false;
var isValidateEmail = false;
var isValidatePhone = false;

var regexFio = /^[\wа-яё]+\s+[\wа-яё]+\s+[\wа-яё]+$/i;
$("#form_fio").change(function () {
    isValidateFio = validateField($(this), regexFio, "Ф.И.О. должно состоять из трёх слов", isValidateFio);
    activeSubmitButton();
});

var regexDate = /^\d{2}\.\d{2}\.\d{4}$/i;
$("#form_date").change(function () {
    isValidateDate = validateField($(this), regexDate, "Неправильный формат даты, требуется дд.мм.гггг", isValidateDate);
    activeSubmitButton();
});

var regexMail = /^[\w\d]+@[\w\d]+\.\w+$/i;
$("#form_email").change(function () {
    isValidateEmail = validateField($(this), regexMail, "Неправильный формат почтового ящика", isValidateEmail);
    activeSubmitButton();
});

var regexPhone = /^.+?(?:380(\d){9}|7\s*\(?\d{3}\)?\s*(?:-?\d){7})$/i;
$("#form_phone").change(function () {
    isValidatePhone = validateField($(this), regexPhone, "Неправильный формат мобильного телефона", isValidatePhone);
    activeSubmitButton();
});

$("input[type=radio]").click(function () {
    activeSubmitButton();
});

function activeSubmitButton() {
    var man = $("#form_man").prop("checked");
    var woman = $("#form_woman").prop("checked");
    var submit = $("#submit");
    if (isValidateFio && isValidateDate && isValidateEmail && isValidatePhone && ( man || woman)) {
        submit.prop("disabled", false);
    } else {
        submit.prop("disabled", true);
    }
}

$("#reset").on("click", function () {
    displayModalWindow("Вы действительно хотите очистить форму?", function () {
        document.getElementById("form").reset();
    });
});
