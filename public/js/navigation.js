function down() {
    changeMainPhoto();
    var li1 = $("<li>").append($("<a>").attr("href","/interests#old").text("Старые"));
    var li2 = $("<li>").append($("<a>").attr("href","/interests#new").text("Новые"));
    var ul = $("<ul>").append(li1).append(li2);
    var div = $("<div id='dropdown'>").append(ul);
    $("#interest").append(div);
}

function down1() {
    changeMainPhoto();
	 var li11 = $("<li>").append($("<a>").attr("href","/#old").text("Заказать такси"));
    var li21 = $("<li>").append($("<a>").attr("href","/#new").text("Оформить клиентскую карту"));
    var ul1 = $("<ul>").append(li11).append(li21);
    var div1 = $("<div id='dropdown'>").append(ul1);
    $("#hom").append(div1);
}

function remove() {
    returnMainPhoto();
    $("#dropdown").remove();
}

function changeMainPhoto() {
    $("#avatar").attr("src", "/img/secondAva.jpg");
}

function returnMainPhoto() {
    $("#avatar").attr("src", "/img/ava.jpg");
}

$("#nav").children()
    .mouseenter(function () {
        changeMainPhoto();
    })
    .mouseleave(function () {
        returnMainPhoto();
});

$("#interest")
    .mouseenter(function () {
        down();
    })
    .mouseleave(function () {
        remove();
});

$("#hom")
    .mouseenter(function () {
        down1();
    })
    .mouseleave(function () {
        remove();
});
