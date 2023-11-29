<?php
include"config.php";
//create data
$title_note=$_POST['title_note'];
$notenote=$_POST['note_note'];

$query="INSERT INTO tb_note VALUES(null,'$title_note','$notenote')";
$sql=mysqli_query($conn,$query);
if($sql){
    header("location:index.php");
}else{
    echo $query;
}

//delete data

?>