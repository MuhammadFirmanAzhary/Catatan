<?php

include "config.php";
$id = $_POST['id'];
$title = $_POST['title_note'];
$note = $_POST['note_note'];

mysqli_query($conn, "UPDATE `tb_note` SET `title_note` = '$title',`note_note`='$note' WHERE `tb_note`.`id_note` = '$id'");
header("location:index.php");