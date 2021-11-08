<?php
$ruta_actual =  dirname(__FILE__);
$folder_name =  date("d\-m\-y");
$directory = $ruta_actual."/".$folder_name;

$img_name = strtolower(date("dMY\-H\hm\ms\s"));

function makeFolder($directory){
  if(!is_dir($directory)){
    mkdir($directory, 0777, true);
    echo "Se creo la carpeta";
  }else{
    $msg = "La carpeta ya existe \n";
  }
}

function uploadPhoto($directory, $img_name){
  if(isset($_POST['upload'])){

    $file_name = $_FILES['file_img']['name'];
    $file_tmp = $_FILES['file_img']['tmp_name'];
    $file_type = $_FILES['file_img']['type'];

    $route = $directory . "/" . $file_name;

    $extension = substr(strrchr($route, '.'), 1);

    $new_name = $directory ."/". $img_name . "." . $extension;

    $file_types = array('jpg','jpeg', 'png');


    move_uploaded_file($file_tmp, $route);
    rename($route , $new_name);
  }
}

function listImages($directory,$folder_name ){
  $img_list = array_slice(scandir($directory),2);
  foreach($img_list as $name){

    echo " <img src='./$folder_name/$name' style='width:200px;'> ";
  }
}

makeFolder($directory);
uploadPhoto($directory, $img_name);
listImages($directory, $folder_name);