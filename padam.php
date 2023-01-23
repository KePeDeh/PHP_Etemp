<?php

include ('config.php');
//lengkapkan aturcara ini
$id_pelajar=$_GET ['id_pelajar'];
$result = mysqli_query($connect, "DELETE FROM pelajar WHERE id_pelajar='$id_pelajar'");

echo "<script>alert('Berjaya padam maklumat $nama_pelajar');
". "window.location = 'index.php'</script>";
header("location:index.php");
?>




