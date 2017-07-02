<?php
    $a = 'localhost';
    $b = 'root';
    $c = '';
    $d = 'el72ny';
    $dbconnect = mysqli_connect($a, $b, $c, $d);

    $userId=$_GET['userID'];
    $sql_select = "select * from user where userID = '$userId'";
    $result = mysqli_query($dbconnect, $sql_select)
        or die("Error in selecting users") . mysqli_error($dbconnect);

    $user_array = array();

    while($row =mysqli_fetch_assoc($result))
    {
        $user_array[] = $row;
    }


echo json_encode($user_array);

    //var_dump($json_encode);
//$json_decode = json_decode($json_encode, true);
//3lshan hya array
//el example elana ba3to hayshtaghl ma3a row wahd bs fl database
//lakn hna da array fa fyha index
//for($x = 0; $x < count($json_decode); $x++)
  //  echo $json_decode[$x]['UserName']."<br>";
    

   // $json = json_encode($user_array); 
//    echo $json;
    mysqli_close($dbconnect);

    
?>