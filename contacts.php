<?php
    include 'dbconnection.php';
    $insertContact="insert into contacts (contactId, userId, number1, number2, number3) values ('1','2','01147127907','01147127908','01147127909');";
    if($dbconnect->query($insertContact) === TRUE)
    {
        echo "success";
    }
    else
    {
        echo "failure";
    }
?>