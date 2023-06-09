<?php

    include "../koneksi.php";

    $sql = "SELECT * FROM event WHERE idEvent=" .$_GET["id"];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- IMPORT -->
    <link rel="stylesheet" href="detail.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title><?php echo $row['namaEvent']; ?></title>
</head>
<body>
    <header>
        <div class="menu">
            <a class="Home" href="../kalenderUtama/index.php">Home</a>
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
                <div class="title <?php echo $row["priority"] ?>" >
                    <div class="titleDate">
                        <div class="date-date"><?php echo date('d', strtotime($row['startDate'])); ?></div>
                        <div class="date-month"><?php echo date('M', strtotime($row['startDate'])); ?></div>
                    </div>
                    <div class="titleTitle">
                        <h3><?php echo $row['namaEvent']; ?></h3>
                    </div>
                </div>

                <!-- Bagian Bawah -->
                <div class="detail">
                    <table>
                        <tr>
                            <td>📆Start</td>
                            <td><?php echo date('d F Y, H:i', strtotime($row['startDate'])); ?> WIB</td>
                        </tr>
                        <tr>
                            <td>🏁End</td>
                            <td><?php echo date('d F Y, H:i', strtotime($row['endDate'])); ?> WIB</td>
                        </tr>
                        <tr>
                            <td>⏱️Duration</td>
                            <td><?php
                                    $date1 = new DateTime($row["startDate"]);
                                    $date2 = new DateTime($row["endDate"]);

                                    $diff = $date1->diff($date2);
                                    echo $diff->format("%a Day"); // Kurang jam nya
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>📍Location</td>
                            <td><?php echo $row['location']; ?></td>
                        </tr>
                        <tr>
                            <td>🚦Priority</td>
                            <td><?php echo $row['priority']; ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button id="updateButton"><i class="fa-sharp fa-solid fa-pen fa-lg" style="color: #ffffff;"> update</i></button>
                                <button id="deleteButton"><i class="fa-sharp fa-solid fa-trash-can fa-lg" style="color: #ffffff;"> delete</i></button>
                            </td>
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