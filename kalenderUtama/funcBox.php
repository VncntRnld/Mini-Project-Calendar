<?php

    include "../koneksi.php";

    if(isset($_GET)){

        $month = $_GET["month"];
        $year = $_GET["year"];
        
        
        $query = "SELECT *, DAY(startDate) as 'date', MONTH(startDate) as 'month' FROM event WHERE 
        YEAR(startDate) = ".$year." AND MONTH(startDate) = " .$month;
        
        // print_r($query);
        
        $data = array();
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        
        header('Content-Type: application/json');
        echo json_encode($data);
    }



?>