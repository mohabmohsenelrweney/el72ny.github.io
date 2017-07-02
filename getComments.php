<?php
    $a = 'localhost';
    $b = 'root';
    $c = '';
    $d = 'el72ny';
    $dbconnect = mysqli_connect($a, $b, $c, $d);

    $caseId=$_GET['caseId'];


    $sql_select  = "select * from get_case_comment where caseId='$caseId'";


    $result = mysqli_query($dbconnect, $sql_select)
        or die("Error in selecting comments") . mysqli_error($dbconnect);

    $case_array = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $case_array[] = $row;
        //$user_id = $row['userId'];
        //$case_id = $row['caseId'];
        
    }


echo json_encode($case_array);

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

        