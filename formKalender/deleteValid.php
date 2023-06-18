<link rel="stylesheet" href="valid.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">


<?php
include "../koneksi.php";

session_start();

    if(!isset($_SESSION["username"])){
        header("Location: ../loginForm/login.php");
    }

$id = $_POST["id"];

$temp = "SELECT * FROM event WHERE idEvent=$id";
$select = mysqli_query($conn, $temp);
$row = mysqli_fetch_assoc($select);

$sql = "DELETE FROM event WHERE idEvent=$id";

$validasi = (time() - strtotime($row["endDate"]) <= 0);

if($validasi){
    $delete = mysqli_query($conn, $sql);
    if ($row["imagePath"] != null) {
        unlink($row["imagePath"]);
    }
}


if($validasi){
    echo "<div><h1><b>EVENT SUCCESSFULLY DELETED</b></h1></div>";
    header("Refresh:2; url=../kalenderUtama/KalenderUtama.php");
} else {
    echo "<div><h1>EVENT HAS PASSED, CAN NOT BE DELETED</h1></div>";
    header("Refresh:2; url=../eventDetail/eventDetail.php?id=$id");
}
?>

