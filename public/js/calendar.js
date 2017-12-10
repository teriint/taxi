var month = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
var daysWeek = ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"];
var currentDate;
var div;

function change() {
    $(".daysGrid").remove();
    var month = $("#month :selected").val();
    div.append(printDays(month, $("#year").val()));
}

function open() {
    currentDate = new Date();
    div = $("<div>").addClass("datePicker");

    var inputYear = $("<input>").attr({
        type: "number",
        id: "year",
        value: currentDate.getFullYear()
    }).addClass("form-control")
        .change(change);

    var inputMonth = $("<select>").attr("id", "month");
    for (var i = 0; i < month.length; i++) {
        var option = $("<option>").text(month[i])
            .val(i);
        if (i == currentDate.getMonth()) {
            option.prop("selected", true);
        }
        inputMonth.append(option);
    }
    inputMonth.addClass("form-control")
        .change(change);

    div.append(inputYear, inputMonth, printDays(currentDate.getMonth(), currentDate.getFullYear()));
    return div;
}

function dateSelection(event) {
    var month = ($("#month :selected").val() - 0) + 1;
    var day = event.currentTarget.innerText;
    if ((day - 0) < 10) {
        day = "0" + event.currentTarget.innerText;
    }
    if ((month) < 10) {
        month = "0" + month;
    }

    if (event.currentTarget.innerText != "") {
        $("#form_date").val(day + "." + month + "." + $("#year").val());
        $(".datePicker").remove();
        isOpen = false;
    } else {
        return;
    }
    $("#form_date").trigger("change");
}

function initGrid(grid) {
    grid.addClass("daysGrid");
    var tableHeader = $("<tr>").addClass("tableHeader");
    for (var i = 1; i < 8; i++) {
        tableHeader.append($("<td>").text(daysWeek[i % 7]));
    }
    grid.append(tableHeader);

    for (var i = 0; i < 6; i++) {
        var tr = $("<tr>");
        for (var j = 0; j < 7; j++) {
            tr.append($("<td>").click(function (event) {
                dateSelection(event);
            }));
        }
        grid.append(tr);
    }
}

function printDays(month, year) {
    var grid = $("<table>");
    initGrid(grid);
    var day = 1;

    currentDate.setDate(day);
    currentDate.setMonth(month);
    currentDate.setYear(year);
    var currentMonth = month;
    var currentWeek = 1;
    var localeDaysOfWeek = [6, 0, 1, 2, 3, 4, 5];

    while (currentMonth == currentDate.getMonth()) {
        var isLastDay = false;
        if (currentDate.getDay() == 0) {
            isLastDay = true;
        }
        grid[0].rows[currentWeek].cells[localeDaysOfWeek[currentDate.getDay()]].innerHTML = day++;
        currentDate.setDate(day);

        if (currentDate.getDay() == 1 && isLastDay) {
            currentWeek++;
        }
    }
    return grid;
}

var isOpen = false;
$("#form_date").click(function () {
    if (!isOpen) {
        $("#date").append(open());
        isOpen = true;
    } else {
        div.remove();
        isOpen = false;
    }
});
