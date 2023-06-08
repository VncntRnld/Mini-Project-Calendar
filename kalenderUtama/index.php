<?php
    include "koneksi.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender</title>

    
    <!--IMPORT IMPORT MAS E-->
    <link rel="stylesheet" type="text/css" href="calender.css">
    <!-- Jquery -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.js"></script> -->


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <header> 
        <div class="menu">
            <a class="Home" href="../kalenderUtama/index.html">Home</a>
        </div>
        <!-- <div class="profile">
            <div class="notif">🔔</div>
            <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-4.0.3&ixclass=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmFuZG9tJTIwcGVyc29ufGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="">
            <div class="username">Graciano</div>
        </div> -->
    </header>
    
    <main>
        <div class="calender">
            <div class="leftBox">
                <div class="content">
                    <div class="year-month">
                        <div class="bulan">
                            <h1 class="current-Month"></h1> <!-- Header bulan tahun sekarang (javascript) -->
                            <div class="icons">
                                <span id="prev" class="prev">&#10094;</span>
                                <span id="next" class="next">&#10095;</span>
                            </div>
                        </div>
                    </div>
                    <div class="date">
                        <table>
                            <thead>
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                            </thead>
                            <tbody>
                                
                                <!-- JAVASCRIPT -->

                            </tbody>
                        </table>
                    </div>
                    
                    <!-- color legends -->
                    <div class="legends">
                        <div class="LToday">
                            <span>Today</span>
                            <div class="todayGuide"></div>
                        </div>

                        <div class="LPriority">
                            <span>High Priority</span>
                            <div class="prioritasWarna">
                                <div class="penting"></div>
                                <div class="biasa"></div>
                                <div class="kurang"></div>
                            </div>
                            <span>Low Priority</span>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="rightBox">

                <div class="ongoing">
                <h3>Ongoing Event :</h3>
                
                <div class="ongoingEvent">
                <!-- 10 -->
                <a class="eventList" href="../eventDetail/details10_1.html">
                    <div class="task penting">
                        <div class="date">
                            <div class="date-date">10</div>
                            <div class="date-month">Apr</div>
                        </div>
                        <div class="title">UTS Prak Progweb</div>
                        <div class="hour">13:00</div>
                    </div>
                    </a>
                    
                <a class="eventList" href="../eventDetail/details10_2.html">
                    <div class="task biasa">
                        <div class="date">
                            <div class="date-date">10</div>
                            <div class="date-month">Apr</div>
                        </div>
                        <div class="title">UTS PP Video</div>
                        <div class="hour">10:00</div>
                    </div>
                    </a>  

                </div>
                </div>


                <div class="upcoming">
                <h3>Upcoming Event :</h3>

                <div class="upcomingEvent">
                <!-- 14 -->
                <a class="eventList" href="../eventDetail/details14.html">
                    <div class="task biasa">
                        <div class="date">
                            <div class="date-date">14</div>
                            <div class="date-month">Apr</div>
                        </div>
                        <div class="title">Rapat PMK</div>
                        <div class="hour">10:00</div>
                    </div>
                    </a>  
                <br>

                <!-- 16 -->
                <a class="eventList" href="../eventDetail/details16.html">
                <div class="task penting">
                    <div class="date">
                        <div class="date-date">16</div>
                        <div class="date-month">Apr</div>
                    </div>
                    <div class="title">Kumpul UTS PP</div>
                    <div class="hour">00:00</div>
                </div>
                </a>

                <a class="eventList" href="../eventDetail/details16_2.html">
                    <div class="task biasa">
                        <div class="date">
                            <div class="date-date">16</div>
                            <div class="date-month">Apr</div>
                        </div>
                        <div class="title">Lomba Badminton</div>
                        <div class="hour">09:00</div>
                    </div>
                    </a>
                <br>

                <!-- 21 -->
                <a class="eventList" href="../eventDetail/details21.html">
                    <div class="task kurang">
                        <div class="date">
                            <div class="date-date">21</div>
                            <div class="date-month">Apr</div>
                        </div>
                        <div class="title">Libur Lebaran</div>
                        <div class="hour">06:00</div>
                    </div>
                    </a>
                <br>

                <!-- 22 -->
                <a class="eventList" href="../eventDetail/details22_2.html">
                    <div class="task kurang">
                        <div class="date">
                            <div class="date-date">22</div>
                            <div class="date-month">Apr</div>
                        </div>
                        <div class="title">Olahraga</div>
                        <div class="hour">09:00</div>
                    </div>
                    </a>
        
                <!-- 22 -->
                <a class="eventList" href="../eventDetail/details22.html">
                    <div class="task biasa">
                        <div class="date">
                            <div class="date-date">22</div>
                            <div class="date-month">Apr</div>
                        </div>
                        <div class="title">Proyek AI</div>
                        <div class="hour">14:00</div>
                    </div>
                    </a>
                
                </div>
                </div>

                
            </div>
        </div>
    </main>

    <footer>
        <h4>CONTACT US</h4>
        <div class="contact">
            <a class="IG" href="https://www.instagram.com/">Instagram </a>
            <span>.</span>
            <a class="TT" href="https://www.tiktok.com/en/">Tiktok</a>
            <span>.</span>
            <a class="YT" href="https://www.youtube.com/">Youtube</a>
            <span>.</span>
            <a class="FB" href="https://web.facebook.com/">Facebook</a>
            <span>.</span>
            <a class="WA" href="https://web.whatsapp.com/">WhatsApp</a>
        </div>
        <div class="copyright">&copy; 2023, VDT</div>
    </footer>

</body>
</html>

<script>

    const currentDate = document.querySelector(".current-Month"),
    mainTgl = document.querySelector("tbody"),
    prevNextIcon = document.querySelectorAll(".icons span");
    
    // get new date
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

        for (let i = 1; i <= lastDateofMonth; i++) { // Bulan ini
            counter += 1;
            if (counter > 7) {
                counter = 1;
                dayTag += "</tr> <tr>";
            }
            if (i == date.getDate()) {
                dayTag += "<td class='today'><span>" + (i) + "</span><div class='dateEvent' id='event" + i +"'>" + updateData(i) + "</div>";
            }
            else{
                dayTag += "<td><span>" + (i) + "</span><div class='dateEvent' id='event" + i +"'>" + updateData(i) + "</div>";
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

            renderCalendar();
            updateData(10) // <= jangan lupa di refresh / render ulang
        })
    });

    // AJAXXXXXXX 👁️👃👁️
    function updateData(i) {
        var xhr = new XMLHttpRequest();

        var temp = [i, currMonth, currYear];
        
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let response = JSON.parse(xhr.response) ,
                eventStr = "";

                // Print..
                response.forEach( ev => {
                    eventStr += "<div class=" + ev["priority"] + "><span><a href='../eventDetail/details10_1.php'>" + ev["namaEvent"] + "</a></span></div>";
                })

                document.getElementById("event" + i).innerHTML = eventStr;
            }
        };
        
        var queryString = "?i=" + encodeURIComponent(temp[0]) + "&month=" + encodeURIComponent(temp[1]) + "&year=" + encodeURIComponent(temp[2]);
        
        xhr.open("GET", "function.php" + queryString, true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send();
    }

updateData(10);

</script>