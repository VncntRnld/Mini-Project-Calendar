<?php

    include "function.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender</title>
    <link rel="stylesheet" type="text/css" href="calender.css">
    <!-- <script src="../resource/JS/Script.js" defer></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
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
                            <h1 class="current-Month"></h1>
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
                                <tr>
                                    <td class="last-month" >
                                        <span>26</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td class="last-month">
                                        <span>27</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td class="last-month">
                                        <span>28</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td class="last-month">
                                        <span>29</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td class="last-month">
                                        <span>30</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td class="last-month">
                                        <span>31</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>1</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>2</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>3</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>4</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>5</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>6</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>7</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>8</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>9</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td class="today">
                                        <span>10</span>
                                        <div class="dateEvent">
                                            <div class="penting"><span><a href="../eventDetail/details10_1.html">UTS Prak Progweb</a></span></div>
                                            <div class="biasa"><span><a href="../eventDetail/details10_2.html">UTS PP Video</a></span></div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>11</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td><span>12</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>13</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>14</span>
                                        <div class="dateEvent">
                                            <div class="biasa"><span><a href="../eventDetail/details14.html">Rapat PMK</a></span></div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>15</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>16</span>
                                        <div class="dateEvent">
                                            <div class="penting"><span><a href="../eventDetail/details16.html">Kumpul UTS PP</a></span></div>
                                            <div class="biasa"><span><a href="../eventDetail/details16_2.html">Lomba Badminton</a></span></div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>17</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>18</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>19</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>20</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>21</span>
                                        <div class="dateEvent">
                                            <div class="kurang"><span><a href="../eventDetail/details21.html">Libur Lebaran</a></span></div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>22</span>
                                        <div class="dateEvent">
                                            <div class="kurang"><span><a href="../eventDetail/details22_2.html">Olahraga</a></span></div>
                                            <div class="biasa"><span><a href="../eventDetail/details22.html">Proyek AI</a></span></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>23</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>24</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>25</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>26</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>27</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>28</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td>
                                        <span>29</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>30</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td class="next-month">
                                        <span>1</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td class="next-month">
                                        <span>2</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td class="next-month">
                                        <span>3</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td class="next-month">
                                        <span>4</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td class="next-month">
                                        <span>5</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                    <td class="next-month">
                                        <span>6</span>
                                        <div class="dateEvent">
                                        </div>
                                    </td>
                                </tr>
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