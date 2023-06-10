
// Ritual Pemanggilan
const currentDate = document.querySelector(".current-Month"),
mainTgl = document.querySelector("tbody"),
prevNextIcon = document.querySelectorAll(".icons span");

let date = new Date(),
currYear = date.getFullYear(), // Tahun sekarang (realtime)
currMonth = date.getMonth(); // Bulan sekarang (realtime)

const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];


const renderCalendar = () => {
    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // Hari pertama bulan ini
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // jumlah hari dibulan ini
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // Hari terakhir bulan ini
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // jumlah hari dibulan sebelumnya

    let dayTag = "<tr>",
    counter = 0;

    for (let i = firstDayofMonth; i > 0; i--) {
        counter += 1;
        if (counter > 7) {
            counter = 1;
            dayTag += "</tr> <tr>";
        }

        dayTag += "<td class='last-month'><span>" + (lastDateofLastMonth - i + 1) + "</span><div class='dateEvent'> </div>";
    }

    for (let i = 1; i <= lastDateofMonth; i++) { // Tanggal sesuai bulan tertampil
        counter += 1;
        if (counter > 7) {
            counter = 1;
            dayTag += "</tr> <tr>";
        }
        if (i == date.getDate() && currMonth == new Date().getMonth()) { // Jika bulan dan tanggal sama seperti realtime
            dayTag += "<td class='today'><span>" + (i) + "</span><div class='dateEvent' id='event" + i +"'> </div>";
        }
        else{
            dayTag += "<td><span>" + (i) + "</span><div class='dateEvent' id='event" + i +"'> </div>";
        }

    }

    for (let i = lastDayofMonth; i < 6; i++) {
        dayTag += "<td class='next-month'><span>" + (i - lastDayofMonth + 1) + "</span><div class='dateEvent'> </div>";
    }

    dayTag += "</tr>";
    // Memasukkan bulan sekarang dan tahun sekarang, kedalam variabel currentDate yang mewakili class current-Month
    currentDate.innerText = months[currMonth] + " " + currYear;
    mainTgl.innerHTML = dayTag;
}
renderCalendar(); //Menjalankan / meload tampilan yang sudah diproses JS
callEvent();
updateBox();


// Pergantian bulan (icon < & >)
prevNextIcon.forEach(icon => {
    icon.addEventListener("click", () => {
        // if prev then -1, else +1
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if(currMonth < 0 || currMonth > 11) {
            date = new Date(currYear, currMonth);
            currYear = date.getFullYear();
            currMonth = date.getMonth();
        }
        else {
            date = new Date();
        }   

        renderCalendar(); //Render ulang gan
        callEvent(); // Event nya
        updateBox();
        
    })
});


// AJAX 👁️👃👁️
function updateData(i) {
    var xhr = new XMLHttpRequest();
    var temp = [i, currMonth+1, currYear];

    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let response = JSON.parse(xhr.response),
            // event point on main calender
            eventStr = "";


            response.forEach( ev => {
                eventStr += "<div class=" + ev["priority"] + "><span><a href='../eventDetail/eventDetail.php?id=" + ev["idEvent"] + "'>" + ev["namaEvent"] + "</a></span></div>";
            })

            document.getElementById("event" + i).innerHTML = eventStr;

        }
    };
    

    var queryString = "?i=" + encodeURIComponent(temp[0]) + "&month=" + encodeURIComponent(temp[1]) + "&year=" + encodeURIComponent(temp[2]);
    
    xhr.open("GET", "funcEvent.php" + queryString, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send();
}

// AJAX part 2, sebenernya bisa digabung cuman eee.. mager rombaknya
function updateBox() {
    var xhr = new XMLHttpRequest(),
    temp = [currMonth+1, currYear],
    monthList = ["Jan", "Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];

    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let response = JSON.parse(xhr.response),
            upcomingStr = "",
            ongoingStr = "";


            response.forEach( ev => {
                console.log(ev["date"] + " " + date.getDate());
                if (ev["date"] == date.getDate() && currMonth == date.getMonth()) {
                    ongoingStr += "<a class='eventList' href='../eventDetail/eventDetail.php?id=" + ev["idEvent"] + "'><div class='task " + ev["priority"] +"'><div class='date'><div class='date-date'>" + ev["date"] + "</div><div class='date-month'>" + monthList[ev["month"]] + "</div></div><div class='title'>" + ev["namaEvent"] + "</div><div class='hour'>" + ev["startTime"].substring(0,5) + "</div></div></a>";
                }
                else{
                    upcomingStr += "<a class='eventList' href='../eventDetail/eventDetail.php?id=" + ev["idEvent"] + "'><div class='task " + ev["priority"] +"'><div class='date'><div class='date-date'>" + ev["date"] + "</div><div class='date-month'>" + monthList[ev["month"]] + "</div></div><div class='title'>" + ev["namaEvent"] + "</div><div class='hour'>" + ev["startTime"].substring(0,5) + "</div></div></a>";
                }
            })

            document.getElementsByClassName("ongoingEvent")[0].innerHTML = ongoingStr;
            document.getElementsByClassName("upcomingEvent")[0].innerHTML = upcomingStr;

        }
    };
    
    
    var queryString = "?month=" + encodeURIComponent(temp[0]) + "&year=" + encodeURIComponent(temp[1]);
    
    xhr.open("GET", "funcBox.php" + queryString, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send();
}


function callEvent() {
    let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
    for (let i = 1; i <= lastDateofMonth; i++) {
        updateData(i) // <= jangan lupa di refresh / render ulang
    }
}


// Tambahan buat addEventButton :v
function addEventHover() {
    document.getElementById("addEventIcon").innerHTML = " add event";
}

function addEventReset() {
    document.getElementById("addEventIcon").innerHTML = "";
}

