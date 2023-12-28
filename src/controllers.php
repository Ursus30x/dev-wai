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
    $tmpImages = get_images();

    if(!isset($_SESSION['remebered']))
        $_SESSION['remebered'] = [];
    if(!isset($_SESSION['username']))
        $_SESSION['username'] = null;

    $images = [];

    foreach($tmpImages as $image){
        if ($image['visibility'] == 'public'
        || ($image['visibility'] == 'private' && $image['author'] == $_SESSION['username'])){
            array_push($images,$image);
        }
    }
    
    $model['images']= $images;
    return 'gallery_view';
}

function newImg()
{
    $image = [
        'title' => null,
        'author' => null,
        'source' => null, 
        'visibility' => 'public',
        '_id' => null
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $image = [
            'title' => $_POST['title'],
            'author' => $_POST['author'],
            'source' => basename($_FILES["source"]["name"])
        ];

        if(isset($_POST['visibility'])){
            $image['visibility'] = $_POST['visibility'];
        }

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

        $user = get_user($login);

        if ($user) {
            $_SESSION['isLoggedIn']=true;
            $_SESSION['username']=$user['username'];
            return "redirect:gallery?page=1";
        }

        return "redirect:login";
    }

    return "login_view";
}

function logout(){
    session_destroy();
    return "redirect:gallery?page=1";
}

function updateRemebered(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remebered'])) {
        unset($_SESSION['remebered']);
        $_SESSION['remebered'] = [];
        
        foreach($_POST['remebered'] as $id){
            array_push($_SESSION['remebered'],$id);
        }
    }
    else{
        unset($_SESSION['remebered']);
        $_SESSION['remebered'] = [];
    }

    return "redirect:" . $_GET['from'] . "?page=1";
}

function remeberedImgs(&$model){

    $remeberedImages = [];

    foreach($_SESSION['remebered'] as $id){
        array_push($remeberedImages, get_image($id));
    }

    $model['images'] = $remeberedImages;
    

    return "gallery_view";
}
