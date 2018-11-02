<html>
<head>
  <title>Database</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
  	<h2><center>DATA PESERTA</center></h2>
  	<table class="tabel" align="center">
  <tr>
  	<th>Id</th>
  	<th>Username</th>
  	<th>Password</th>
  	<th>Level</th>
  	<th>Fullname</th>
    <th>Aksi</th>
  </tr></div>
  <?php
  include('koneks.php');
  $sql_tampil ="SELECT * FROM users";
  $peserta=mysqli_query($connect_db,$sql_tampil);
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
    ?>
  	<tr>
      <td><?php echo $baris_data['id']; ?></td>
      <td><?php echo $baris_data['username']; ?></td>
      <td><?php echo $baris_data['password']; ?></td>
      <td><?php echo $baris_data['level']; ?></td>
      <td><?php echo $baris_data['fullname']; ?></td>
      <td>
			<a class="edit" href="edit.php?id=<?php echo $baris_data['id']; ?>">Edit</a> |
			<a class="hapus" href="delet.php?id=<?php echo $baris_data['id']; ?>">Hapus</a>
		  </td>
  	</tr>
<?php } ?>
</body>
</html>