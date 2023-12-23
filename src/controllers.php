<?php
require_once 'business.php';
require_once 'controller_utils.php';



//controllers for no connection with db
function main(&$model){
    return 'main_view';
}
function lore(&$model){
    return 'lore_view';
}
function characterCreation(&$model){
    return 'characterCreation_view';
}
function rules(&$model){
    return 'rules_view';
}


function gallery(&$model){
    $images = get_images();
    $model['images']= $images;
    return 'gallery_view';
}

function newImg(&$model)
{
    $image = [
        'title' => null,
        'author' => null,
        'source' => null,
        '_id' => null
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $image = [
            'title' => $_POST['title'],
            'author' => $_POST['author'],
            'source' => basename($_FILES["source"]["name"])
        ];

        $imageStatus = imageCheck();
        if($imageStatus == 0){
            if (save_image(null, $image)) {
                upload();
                createWatermarkImg($image['source'], $_POST['watermark']);
                createThumbnailImg($image['source']);
                return 'redirect:gallery?page=1';
            }
        }
        else if ($imageStatus == 1) return 'redirect:newImg?error=1';
        else if ($imageStatus == 2) return 'redirect:newImg?error=2';
        else return 'redirect:newImg?error=0';
    }

    $model['image'] = $image;

    return 'newImg_view';
}

function register(){
    $user = [
        'username' => null,
        'email' => null,
        'password' => null,
        '_id' => null
    ];

    if($_SERVER['REQUEST_METHOD'] === 'POST' 
    && $_POST['password']==$_POST['confirm']
    && !isLoginTaken($_POST['username'])) {

        $user = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => hash('sha256', $_POST['password'])
        ];

        create_user($user);
        return "redirect:gallery?page=1";
    }

    return "register_view";
}

function login(){
    $login = [
        'username' => null,
        'password' => null,
    ];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $login = [
            'username' => $_POST['username'],
            'password' => hash('sha256', $_POST['password'])
        ];

        $users = get_users();
        foreach($users as $user){
            if($user['username']==$login['username'] 
            && $user['password']==$login['password'] ){
                $_SESSION['isLoggedIn']=true;
                $_SESSION['username']=$user['username'];
                return "redirect:gallery?page=1";
            }
        }
        return "redirect:login";
    }

    return "login_view";
}

function logout(){
    unset($_SESSION['isLoggedIn']);
    unset($_SESSION['username']);

    return "redirect:gallery?page=1";
}
