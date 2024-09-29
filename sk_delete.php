<?php
include("config.php");

$id =   $_GET['sk_id'];

$result = mysqli_query($mysqli, "DELETE FROM sk_profile WHERE sk_id=$id");

header("Location:sk_profile_edit_table.php");
?>

