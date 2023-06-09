<?php
    include "../koneksi.php";
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <header> 
        <div class="menu">
            <a class="Home" href="../kalenderUtama/index.html">Home</a>
        </div>
        <div class="profile">
            <div class="notif">🔔</div>
            <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-4.0.3&ixclass=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmFuZG9tJTIwcGVyc29ufGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="">
            <div class="username">Graciano</div>
        </div>
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

            <!-- EventBar -->
            <div class="rightBox">

                <div class="ongoing">
                <h3>Ongoing Event :</h3>
                
                    <div class="ongoingEvent">

                    <!-- Js -->

                    </div>

                </div>


                <div class="upcoming">
                <h3>Upcoming Event :</h3>

                    <div class="upcomingEvent">
                    
                    <!-- Js -->

                    </div>
                    
                </div>

                
            </div>
        </div>

        <button class="addEventButton" onmouseover="addEventHover()" onmouseout="addEventReset()"><i class="fa-solid fa-plus fa-2xl" id="addEventIcon" style="color: #ffffff;"></i></button>

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
<script src="Script.js"></script>