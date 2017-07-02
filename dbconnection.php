<?php
$a = 'localhost';
    $b = 'root';
    $c = '';
    $d = 'el72ny';
    $dbconnect = mysqli_connect($a, $b, $c, $d);
if ($dbconnect->connect_error) {
    die("failed");
}else{
	echo "Success";
}
?>