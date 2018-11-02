<?php
include 'koneks.php';
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$fullname = $_POST['fullname'];
$sql_insert="UPDATE users SET id=$id,username=$username,password=$password,level=$level,fullname=$fullname WHERE id='$id',username='$username',password='$password',level='$level',fullname='$fullname'";
//"UPDATE users SET id=$id,username=$username,password=$password,level=$level,fullname=$fullname WHERE id='$id'"
mysqli_query($connect_db,$sql_insert)or die(mysqli_error($connect_db));
echo '<script>
alert("Datamu Berhasil Diedit");
location="index.php?"
</script>';
?>