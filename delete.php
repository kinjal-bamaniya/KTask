<?php

include "conn.php";

$id = $_GET['id'];
$del = "DELETE FROM user WHERE id='$id'";
$del1 = mysqli_query($conn,$del);
if($del1){
echo "Data deleted";
header("Location:display.php");
}else{
echo "Error";
header("Location:display.php");
}
?>