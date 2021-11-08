<?php include_once './pruebas.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image manager</title>
</head>
<body>
  <form action="index.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file_img">
    <button type="submit" name="upload">Subir imagen</button>
  </form>
</body>
</html>