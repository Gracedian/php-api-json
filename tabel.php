<html>
<head>
  <title>Menampilkan data dari database ke dalam bentuk tabel</title>
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
  </tr></div>
  <?php
  include('koneks.php');
  $sql_tampil ="SELECT * FROM users";
  $peserta=mysqli_query($connect_db,$sql_tampil);
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
    echo'
    </tr>
        <td>'.$baris_data['id'].'</td>
        <td>'.$baris_data['username'].'</td>
        <td>'.$baris_data['password'].'</td>
        <td>'.$baris_data['level'].'</td>
        <td>'.$baris_data['fullname'].'</td>
    </tr>';
  }
  ?>
</body>
</html>