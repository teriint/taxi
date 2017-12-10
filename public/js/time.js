var months = ["Января","Февраля","Марта","Апреля","Мая","Июня","Июля","Августа","Сентября","Октября","Ноября","Декабря"];

function getTime() {
    var date = new Date();
    var result = date.getDate() + " ";
    result += months[date.getMonth()] + " " + (date.getYear() - 100) + " ";

    if(date.getHours() < 10) {
        result += "0";
    }
    result += date.getHours() + ":";

    if(date.getMinutes() < 10) {
        result += "0";
    }
    result += date.getMinutes() + ":";

    if(date.getSeconds() < 10) {
        result += "0";
    }
    result += date.getSeconds();
    $("#time").text(result);
}

$(document).ready(function() {
   getTime();
   setInterval(getTime,1000);
});