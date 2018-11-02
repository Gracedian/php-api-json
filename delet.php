<?php
include 'koneks.php';
$id = $_GET['id'];
$sql_delete="DELETE FROM users WHERE id='$id'";
mysqli_query($connect_db,$sql_delete)or die(mysqli_error($connect_db));
echo '<script>
alert("Datamu Berhasil Dihapus");
location="index.php?"
</script>';
?>