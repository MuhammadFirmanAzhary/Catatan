<?php
$host ="localhost";
$user="root";
$pass="";
$db="note_pad";

$conn =mysqli_connect($host,$user,$pass,$db);

if($conn){
    //echo "berhasil ";
}else{
    echo "mati lampu";
}
mysqli_select_db($conn,$db);
?>