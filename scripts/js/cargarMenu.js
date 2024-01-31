// menuLoader.js
function cargarMenu() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.body.insertAdjacentHTML('afterbegin', xhr.responseText);
        }
    };
    xhr.open("GET", "menu.html", true);
    xhr.send();
}
