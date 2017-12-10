var photos = new Array(15);
var titles = new Array(15);
var currentPhotoIndex;
var isAnimateTime;

var closePhoto = function () {
    var lightBox = $("#lightBox");
    if(lightBox.length == 0) {
        $(document).unbind("keyup",closePhoto);
    } else {
        lightBox.remove();
    }
};

function nextPhoto(index) {
    if(isAnimateTime) {
        currentPhotoIndex--;
        return;
    }
    if(index == photos.length) {
        index = 0;
        currentPhotoIndex = index;
    }
    var img = $("<img>")
        .attr({
            id: "next-photo",
            src: photos[index],
            alt: titles[index],
            title: titles[index]
        })
        .click(function () {
            $("#lightBox").remove();
        });
    var text = $("<span>")
        .addClass("titleText")
        .text(titles[index] + " из " + photos.length);
    $(".fullPhoto").append(img);
    isAnimateTime = true;
    img.animate({
        left: "50%"
    },750);
    $("#photo").animate({
        left: "200vw"
    },750,function () {
        $(this).remove();
        isAnimateTime = false;
    });
    img.attr("id","photo");
    $(".titleContent span").replaceWith(text);
}

function prevPhoto(index) {
    if(isAnimateTime) {
        currentPhotoIndex++;
        return;
    }
    if(index == -1) {
        index = photos.length - 1;
        currentPhotoIndex = index;
    }
    var img = $("<img>")
        .attr({
            id: "prev-photo",
            src: photos[index],
            alt: titles[index],
            title: titles[index]
        })
        .click(function () {
            $("#lightBox").remove();
        });
    var text = $("<span>")
        .addClass("titleText")
        .text(titles[index] + " из " + photos.length);
    $(".fullPhoto").append(img);
    isAnimateTime = true;
    img.animate({
        left: "50%"
    },750);
    $("#photo").animate({
        left: "-200vw"
    },750,function () {
        $(this).remove();
        isAnimateTime = false;
    });
    img.attr("id","photo");
    $(".titleContent span").replaceWith(text);
}

function showPhoto(index) {
    currentPhotoIndex = index;
    var lightBox = $("<div>").attr("id", "lightBox");
    $(document).bind("keyup","esc", closePhoto);

    var fullPhoto = $("<div>").addClass("fullPhoto");
    var img = $("<img>")
        .attr({
            id: "photo",
            src: photos[index],
            alt: titles[index],
            title: titles[index]
        })
        .click(function () {
            lightBox.remove();
        });

    var text = $("<span>")
        .addClass("titleText")
        .text(titles[index] + " из " + photos.length);

    var title = $("<div>")
        .addClass("titlePhoto")
        .append(
            $("<div>")
                .addClass("titleContent")
                .append(
                    $("<div>")
                        .attr("id", "prevButton")
                        .addClass("btn btn-default")
                        .text("➤")
                        .click(function () {
                            currentPhotoIndex--;
                            prevPhoto(currentPhotoIndex);
                        }),
                    text,
                    $("<div>")
                        .attr("id", "nextButton")
                        .addClass("btn btn-default")
                        .text("➤")
                        .click(function () {
                            currentPhotoIndex++;
                            nextPhoto(currentPhotoIndex);
                        })
                )
        );
    fullPhoto.append(img);
    lightBox.append(fullPhoto, title);
    $(document.body).append(lightBox);
}

$(document).ready(function () {
    for(var i = 0; i < 15; i++) {
        photos[i] = "/img/gallery/" + (i + 1) + ".jpg";
        titles[i] = "Фотография " + (i + 1);
    }
    $(".photo").click(function () {
        showPhoto(this.title.split(" ")[1] - 1);
    })
});


