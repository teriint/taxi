if (localStorage[decodeURI(window.location.pathname)] == null) {
    localStorage.setItem(decodeURI(window.location.pathname), 1);
} else {
    localStorage[decodeURI(window.location.pathname)] = (localStorage[decodeURI(window.location.pathname)] - 0) + 1;
}

function getCookie(name) {
    var regex = RegExp("\\b" + name + "=([\\w\\d\\\"\\{\\}\\.\\/,:]+)","i");
    var matches = document.cookie.match(regex);
    return matches ? matches[1] : undefined;
}

function setCookie(name, value, days) {
    var date = new Date();
    date.setDate(date.getDate() + days);
    document.cookie = name + "=" + value + " expires=" + date.toUTCString();
}

if(getCookie("visited") == undefined) {
    var visited = {};
    visited[decodeURI(window.location.pathname)] = 1;
    setCookie("visited",JSON.stringify(visited),1);
} else {
    var visited = JSON.parse(getCookie("visited"));
    if(visited[decodeURI(window.location.pathname)] == undefined) {
        visited[decodeURI(window.location.pathname)] = 1;
    } else {
        visited[decodeURI(window.location.pathname)]++;
    }
    setCookie("visited",JSON.stringify(visited),1);
}

var currentHistory = $("#currentHistory")[0];
var allTimeHistory = $("#allTimeHistory")[0];
if (currentHistory != null) {
    for (var i = 0; i < 8; i++) {
        currentHistory.rows[(i + 2)].cells[0].innerText = localStorage.key(i);
        currentHistory.rows[(i + 2)].cells[1].innerText = localStorage[localStorage.key(i)];
    }
}
if (allTimeHistory != null) {
    var isCookieWork;
    try {
        var visited = JSON.parse(getCookie("visited"));
        isCookieWork = true;
    } catch (ex) {
        isCookieWork = false;
    }
    if(isCookieWork) {
        var i = 2;
        for (key in visited) {
            allTimeHistory.rows[i].cells[0].innerText = key;
            allTimeHistory.rows[i++].cells[1].innerText = visited[key];
        }
    }
}
