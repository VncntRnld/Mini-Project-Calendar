function addEventHover() {
    document.getElementById("addEventIcon").innerHTML = " add event";
}

function addEventReset() {
    document.getElementById("addEventIcon").innerHTML = "";
}

function addEventClick() {
    location.href = "../formKalender/formCreate.php";
}

var imageCek = document.getElementsByClassName("gambar")[1].src;
if (imageCek == "http://localhost/miniProjectCalendar/formKalender/") {
    document.getElementsByClassName("gambar")[0].hidden = true;
}