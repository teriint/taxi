function displayModalWindow(message, okCallback) {
    $(document.body).append(
        $("<div>").attr("id","lightBox")
            .append(
                $("<div>").attr("id","modal-window")
                    .append(
                        $("<div>").attr("id","modal-window-content")
                            .append(
                                $("<div>").attr("id","content-message")
                                    .text(message),
                                $("<input>").addClass("btn btn-default")
                                    .attr({
                                        id: "button-fail",
                                        type: "button"
                                    })
                                    .val("Нет")
                                    .on("click", function () {
                                        $("#lightBox").remove();
                                    }),
                                $("<input>").addClass("btn btn-default")
                                    .attr({
                                        id: "button-ok",
                                        type: "button"
                                    })
                                    .val("Да")
                                    .on("click", function () {
                                        okCallback();
                                        $("#lightBox").remove();
                                    })
                            )
                    )
            )
    );
}
