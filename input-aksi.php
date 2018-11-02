<?php
include 'koneks.php';
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$fullname = $_POST['fullname'];
$sql_insert="INSERT INTO users VALUES ('$id','$username','$password','$level','$fullname')";
mysqli_query($connect_db,$sql_insert)or die(mysqli_error($connect_db));
echo '<script>
alert("Data Berhasil Disimpan");
location="tabel.php?"
</script>';
?>
