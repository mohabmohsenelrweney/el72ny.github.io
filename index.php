<?php
    $a = 'localhost';
    $b = 'root';
    $c = '';
    $d = 'el72ny';
    $connect = mysqli_connect($a, $b, $c, $d);

    if($connect) {
        $query = "SELECT * FROM user";
        $query_run = mysqli_query($connect, $query);
        $mysqli_results = mysqli_fetch_assoc($query_run);
        $json = json_encode($mysqli_results);
        //hna json hat3mlo decode
        $json_response = json_decode($json, true);
        //lw 3awz tshof el json response kolo ektb "var_dump($json_response)"


        //Lw 3awz tetba3 value mo3yana ml json hatktb esm el column elenta 3awz tetba3 meno values fana maslan 3awz body fa katbto bl tary2a dy
        echo $json_response['UserName'];
    } else
        echo 'error';