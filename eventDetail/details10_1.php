<?php
    include "../kalenderUtama/koneksi.php";

    if(isset($_GET["id"])){

        $id = $_GET["id"];
        
        $query = "SELECT * FROM event WHERE id = '$id' ";
        $result = mysqli_query($conn, $query);
        
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <title>Ongoing 10 april</title>
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
        <div class="eventDetails">
            <div class="content">
                <!-- Bagian Atas -->
                <div class="title penting">
                    <div class="titleDate">
                        <!-- TITLE ATAS -->
                        <div class="kiri">
                            <div class="date-date">10</div>
                            <div class="date-month">Apr</div>
                        </div>
                        <div class="kanan">
                            <button></button>
                        </div>
                    </div>
                    <div class="titleTitle">
                        <h3>UTS Prak Progweb</h3>
                    </div>
                </div>
                <!-- Bagian Bawah -->
                <div class="detail">
                    <table>
                        <tr>
                            <td>📆Start</td>
                            <td>10 April 2023, 13:00 WIB</td>
                        </tr>
                        <tr>
                            <td>🏁End</td>
                            <td>10 April 2023, 15:00 WIB</td>
                        </tr>
                        <tr>
                            <td>⏱️Duration</td>
                            <td>120 Minutes</td>
                        </tr>
                        <tr>
                            <td>📍Location</td>
                            <td>Lab H</td>
                        </tr>
                        <tr>
                            <td>🚦Priority</td>
                            <td>High</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="content gambar">
                <!-- Bagian Atas -->
                <div class="title">
                    <div class="titleTitle">
                        <h3>Attachment</h3>
                    </div>
                </div>
                <!-- Bagian Bawah -->
                <img src="../resource/ttsProgweb.png" alt="">
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