<?php
require_once 'business.php';
require_once 'controller_utils.php';



//controllers for no connection with db
function main(){
    return 'main_view';
}
function lore(){
    return 'lore_view';
}
function characterCreation(){
    return 'characterCreation_view';
}
function rules(){
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
        $imageFileType = strtolower(pathinfo(basename($_FILES["source"]["name"]),PATHINFO_EXTENSION));
        
        $image = [
            'title' => $_POST['title'],
            'author' => $_POST['author'],
            'source' => strval(time()) . $_POST['title'] . $_POST['author'] . '.' . $imageFileType,
            'visibility' => 'public'
        ];

        if(isset($_POST['visibility'])){
            $image['visibility'] = $_POST['visibility'];
        }

        
        $_SESSION['newImgErr'] = imageCheck();

        if($_SESSION['newImgErr'] == ''){
            if (save_image(null, $image)) {
                upload($image['source']);
                createWatermarkImg($image['source'], $_POST['watermark']);
                createThumbnailImg($image['source']);
                return 'redirect:gallery?page=1';
            }
        }else{
            return 'redirect:newImg?error=0'; 
        }
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

    

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $passCheck = passwordConfirmation($_POST['password'],$_POST['confirm']);
        $usernameCheck = isUsernameTaken($_POST['username']);

        if(!$usernameCheck && $passCheck){
            $user = [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
            ];
    
            create_user($user);
            return "redirect:gallery?page=1";
        }
        else{
            return "redirect:register";
        }
        
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
            'password' => $_POST['password']
        ];

        $user = get_user($login['username']);

        if (password_verify($login['password'],$user['password'])) {
            $_SESSION['isLoggedIn']=true;
            $_SESSION['username']=$user['username'];
            $_SESSION['loginErr'] = "";
            return "redirect:gallery?page=1";
        }
        else{
            $_SESSION['loginErr'] = '<p class="errorTxt">Username or password is not correct</p>';
        }

        return "redirect:login";
    }

    return "login_view";
}

function logout(){
    session_destroy();
    return "redirect:gallery?page=1";
}



function addRemebered(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remebered'])) {

        foreach($_POST['remebered'] as $id){
            if(!array_search($id,$_SESSION['remebered']))array_push($_SESSION['remebered'],$id);
        }
    }

    return "redirect:" . $_GET['from'] . "?page=" . $_GET['page'];
}

function unsetRemebered(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remebered'])) {

        foreach($_POST['remebered'] as $id){
            unset($_SESSION['remebered'][array_search($id,$_SESSION['remebered'])]);
        }
    }

    return "redirect:" . $_GET['from'] . "?page=" . $_GET['page'];
}

function remeberedImgs(&$model){

    $remeberedImages = [];

    foreach($_SESSION['remebered'] as $id){
        array_push($remeberedImages, get_image($id));
    }

    $model['images'] = $remeberedImages;
    
    return "remebered_view";
}
