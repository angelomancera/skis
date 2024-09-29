<?php
include("config.php");

$id =   $_GET['ar_id'];

$result = mysqli_query($mysqli, "DELETE FROM areport WHERE ar_id=$id");

header("Location:areport_edit_table.php");
?>

