<?php
include 'koneksi.php';

$query = "SELECT * FROM profil LIMIT 1";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tentang Saya</title>
</head>
<body>
  <h1><?php echo $data['nama']; ?></h1>
  <img src="<?php echo $data['foto']; ?>" alt="Foto Profil" width="200">
  <p><?php echo $data['deskripsi']; ?></p>
</body>
</html>
