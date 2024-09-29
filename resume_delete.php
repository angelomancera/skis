<?php
include("config.php");

$id =   $_GET['res_id'];

$result = mysqli_query($mysqli, "DELETE FROM res WHERE res_id=$id");

header("Location:resume_edit_table.php");
?>

