// current title date, ambil element dari HTML by class
const currentDate = document.querySelector(".current-Month"),
mainTgl = document.querySelector("tbody"),
prevNextIcon = document.querySelectorAll(".icons span");

// get new date
let date = new Date(),
currYear = date.getFullYear(), // Tahun sekarang (realtime)
currMonth = date.getMonth(); // Bulan sekarang (realtime)

const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

// const renderCalendar = () => {
//     let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // Hari pertama bulan ini
//     lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // jumlah hari dibulan ini
//     lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // Hari terakhir bulan ini
//     lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // jumlah hari dibulan sebelumnya

//     let dayTag = "<tr>",
//     counter = 0;
    
    
//     // bikin cookie dengan key "lastDate" yang berisi value total hari bulan ini (kenang-kenangan)
//     // document.cookie = "firstDay = " + firstDayofMonth,
//     // document.cookie = "lastDate = " + lastDateofMonth,
//     // document.cookie = "lastDay = " + lastDayofMonth,
//     // document.cookie = "lastDateLastMonth = " + lastDateofLastMonth;

//     for (let i = firstDayofMonth; i > 0; i--) {
//         counter += 1;
//         if (counter > 7) {
//             counter = 1;
//             dayTag += "</tr> <tr>";
//         }

//         dayTag += "<td class='last-month'><span>" + (lastDateofLastMonth - i + 1) + "</span><div class='dateEvent'>  </div>";
//     }

//     for (let i = 1; i <= lastDateofMonth; i++) {
//         counter += 1;
//         if (counter > 7) {
//             counter = 1;
//             dayTag += "</tr> <tr>";
//         }

//         dayTag += "<td><span>" + (i) + "</span><div class='dateEvent'>  </div>";
//     }

//     for (let i = lastDayofMonth; i < 6; i++) {
//         dayTag += "<td class='next-month'><span>" + (i - lastDayofMonth + 1) + "</span><div class='dateEvent'>  </div>";
//     }

//     dayTag += "</tr>";
//     // Memasukkan bulan sekarang dan tahun sekarang, kedalam variabel currentDate yang mewakili class current-Month
//     currentDate.innerText = months[currMonth] + " " + currYear;
//     mainTgl.innerHTML = dayTag;
// }
// renderCalendar(); //Menjalankan / meload tampilan yang sudah diproses JS

// prevNextIcon.forEach(icon => {
//     icon.addEventListener("click", () => {
//         // if prev then -1, else +1
//         currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;
//         renderCalendar(); // <= jangan lupa di refresh / render ulang
//     })
// });
