<?php

define("THUMBNAIL_WIDTH", 200);
define("THUMBNAIL_HEIGHT", 125);
define("IMG_DEST", "images/");
define("IMGS_PER_PAGE", 2);
define("FILE_NO_ERR",0);
define("FILE_EXISTS_ERR", 1);
define("FILE_SIZE_ERR", 2);
define("USERNAME_TAKEN", 1);




function createImage($imageFileType,$source){
  if($imageFileType == 'jpg' || $imageFileType == 'jpeg')
      return imagecreatefromjpeg(IMG_DEST . $source);
  else if($imageFileType == 'png')
      return imagecreatefrompng( IMG_DEST . $source);
}

function createThumbnailImg($source){
  $imageFileType = strtolower(pathinfo($source,PATHINFO_EXTENSION));

  $image = createImage($imageFileType,$source);
  $width = imagesx($image);
  $height = imagesy($image);

  $virtual_image = imagecreatetruecolor(THUMBNAIL_WIDTH, THUMBNAIL_HEIGHT);

  imagecopyresampled($virtual_image, $image, 0, 0, 0, 0, THUMBNAIL_WIDTH, THUMBNAIL_HEIGHT, $width, $height);

  $im_path = pathinfo($source);
  $im_name = $im_path['filename'];

  imagepng($virtual_image, IMG_DEST . $im_name . '_thumbnail.png');
}

function createWatermarkImg($source,$text){
    $imageFileType = strtolower(pathinfo($source,PATHINFO_EXTENSION));

    $image = createImage($imageFileType,$source);

    // First we create our stamp image manually from GD
    $stamp = imagecreatetruecolor(200, 70);
    imagefilledrectangle($stamp, 0, 0, 199, 169, 0x0000FF);
    imagefilledrectangle($stamp, 9, 9, 190, 60, 0xFFFFFF);
    imagestring($stamp, 5, 20, 20, $text, 0x0000FF);

    // Set the margins for the stamp and get the height/width of the stamp image
    $right = 10;
    $bottom = 10;
    $sx = imagesx($stamp);
    $sy = imagesy($stamp);
    // Merge the stamp onto our photo with an opacity of 50%
    imagecopymerge($image, $stamp, imagesx($image) - $sx - $right, imagesy($image) - $sy - $bottom, 0, 0, imagesx($stamp), imagesy($stamp), 70);
    // Save the image to file and free memory

    $im_dest = 'uploads/';
    $im_path = pathinfo($source);
    $im_name = $im_path['filename'];

    imagepng($image, IMG_DEST . $im_name . '_watermark.png');
    imagedestroy($image);
}

function imageCheck(){
  $target_file = IMG_DEST . basename($_FILES["source"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


  if (file_exists($target_file)) {
    return 1;
  } 
  else if ($_FILES["source"]["size"] > 10000000) {
    return 2;
  } 

  return 0;
}

function upload(){
  $target_file = IMG_DEST . basename($_FILES["source"]["name"]);
  move_uploaded_file($_FILES["source"]["tmp_name"], $target_file);
}

function isLoginTaken($username){
  $users = get_users();
  foreach($users as $user){
    if($user['username'] == $username)return true;
  }

  return false;
}