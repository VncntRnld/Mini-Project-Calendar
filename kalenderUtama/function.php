<?php

    include "koneksi.php";

    if(isset($_GET)){

        $date = $_GET["i"];
        $month = $_GET["month"];
        $year = $_GET["year"];
        
        // testing..
        // $date = 10;
        // $month = 4;
        // $year = 2023;
        
        $query = "SELECT * FROM event WHERE 
        YEAR(startDate) = ".$year." AND MONTH(startDate) = " .$month. 
        " AND DAY(startDate) <= " .$date. " AND DAY(endDate) >= " .$date;
        
        // print_r($query);
        
        $data = array();
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)) {
            // "<div class=" .$row["priority"]. "><span><a href='../eventDetail/details10_1.php'>"  .$row["namaEvent"]. "</a></span></div>";
            $data[] = $row;
        }
        
        header('Content-Type: application/json');
        echo json_encode($data);
    }



?>