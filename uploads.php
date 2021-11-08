<?php

if(isset($_POST['submit'])){

  $file = $_FILES['file'];
  print_r($file);

  $file_name = $_FILES['file']['name'];
  $file_tmp_name = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_error = $_FILES['file']['error'];
  $file_type = $_FILES['file']['type'];
  $folder = "uploads/";


  $new_size = $file_size/1024;

  $new_file_name = strtolower($file);

  move_uploaded_file($file_tmp_name, $folder.$new_file_name);
}

?>