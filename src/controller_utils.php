<?php

define("THUMBNAIL_WIDTH", 200);
define("THUMBNAIL_HEIGHT", 125);
define("IMG_DEST", "images/");
define("IMGS_PER_PAGE", 4);




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

  imagewebp($virtual_image, IMG_DEST . $im_name . '_thumbnail.webp');
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
  $target_file = basename($_FILES["source"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $err = '';

  if (file_exists($target_file)) {
    $err .= '<p class="errorTxt">File already exists, try again in few seconds</p>';
  } 
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    $err .= '<p class="errorTxt">File is a wrong type</p>';
  } 
  if (filesize($_FILES["source"]["tmp_name"]) >= 1000000) {
    $err .= '<p class="errorTxt">File is too large</p>';
  } 
  
  return $err;
}

function upload($path){
  $target_file = IMG_DEST . $path;
  move_uploaded_file($_FILES["source"]["tmp_name"], $target_file);
}

function passwordConfirmation($password, $repeat){
  if($password == $repeat){
    $_SESSION['registerPasswordErr'] = '';
    return true;
  }
  else{
    $_SESSION['registerPasswordErr'] = '<p class="errorTxt">Password doesnt match the repeated password</p>';
    return false;
  }
}

function isUsernameTaken($username){
  $users = get_users();
  foreach($users as $user){
    if($user['username'] == $username){
      $_SESSION['registerUsernameErr'] = '<p class="errorTxt">Username is taken</p>';
      return true;
    }
  }
  $_SESSION['registerUsernameErr'] = '';
  return false;
}