<link rel="stylesheet" href="valid.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">


<?php

    include "../koneksi.php";

    session_start();

    if(!isset($_SESSION["username"])){
        header("Location: ../loginForm/login.php");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST)){
        $nama = $_POST["namaEvent"];
        $startDate= $_POST["startDate"];
        $startTime = $_POST["startTime"];
        $endDate = $_POST["endDate"];
        $endTime = $_POST["endTime"];
        $location = $_POST["location"];
        $priority = $_POST["priority"];

        $sql = "INSERT INTO event (namaEvent, startDate, startTime, endDate, endTime, location, priority) VALUES ('$nama', '$startDate', '$startTime', '$endDate', '$endTime', '$location', '$priority')";

            
        if(isset($_FILES["image"]["name"])){
            $uploadfile = "img/".$_FILES["image"]["name"];
            $dok = $_FILES["image"]["tmp_name"];
            if(move_uploaded_file($dok, $uploadfile)){
                $sql = "INSERT INTO event (namaEvent, startDate, startTime, endDate, endTime, location, priority, imagePath) VALUES ('$nama', '$startDate', '$startTime', '$endDate', '$endTime', '$location', '$priority', '$uploadfile')";
            }
        } 
        

        if(mysqli_query($conn, $sql)){
            echo "<div><center><h1>SUCCESSFULLY ADD A NEW EVENT</h1></center></div>";
            header("Refresh:2; url=../eventDetail/eventDetail.php?id=" .getId());

        } else {
            echo "<div><center><h1>FAILED TO ADD A NEW EVENT</h1></center></div>";
            header("Refresh:2; url=../kalenderUtama/KalenderUtama.php");
        }
    }

    function getId() {
        $sql = "SELECT idEvent FROM event ORDER BY idEvent DESC LIMIT 1";
        $res = mysqli_query($GLOBALS["conn"], $sql);
        $row = mysqli_fetch_assoc($res);
        return $row["idEvent"];
    }

?>