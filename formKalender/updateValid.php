<link rel="stylesheet" href="valid.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">


<?php

    include "../koneksi.php";

    session_start();

    if(!isset($_SESSION["username"])){
        header("Location: ../loginForm/login.php");
    }
    
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST)){
        $id = $_POST["id"];
        $nama = $_POST["namaEvent"];
        $startDate= $_POST["startDate"];
        $startTime= $_POST["startTime"];
        $endDate = $_POST["endDate"];
        $endTime = $_POST["endTime"];
        $location = $_POST["location"];
        $priority = $_POST["priority"];
            
        $sql = "UPDATE event SET namaEvent ='$nama', startDate='$startDate', startTime='$startTime', endDate='$endDate', endTime='$endTime', location='$location', priority='$priority' WHERE idEvent=$id";
        
        $temp = "SELECT * FROM event WHERE idEvent=$id";
        $select = mysqli_query($conn, $temp);
        $row = mysqli_fetch_assoc($select);

        if(isset($_FILES["image"]["name"])){ 
            // if($row["imagePath"] != ""){
            //     unlink($row["imagePath"]);
            // }
            $uploadfile = "img/".$_FILES["image"]["name"];
            $dok = $_FILES["image"]["tmp_name"];
            if(move_uploaded_file($dok, $uploadfile)){
                $sql = "UPDATE event SET namaEvent ='$nama', startDate='$startDate', startTime='$startTime', endDate='$endDate', endTime='$endTime', location='$location', priority='$priority', imagePath='$uploadfile' WHERE idEvent=$id";
            }
        }

        if(mysqli_query($conn, $sql)){
            echo "<div><center><h1>EVENT SUCCESSFULLY UPDATED</h1></center></div>";
            header("Refresh:2;url=../eventDetail/eventDetail.php?id=$id");
        }else{
            echo "<div><center><h1>EVENT FAILED TO UPDATE</h1></center></div>";
            header("Refresh:2; url=../kalenderUtama/KalenderUtama.php");

        }
    }
?>