<?php


use MongoDB\BSON\ObjectID;


function get_db(){
    $mongo = new MongoDB\Client(
        "mongodb://localhost:27017/wai",
        [
            'username' => 'wai_web',
            'password' => 'w@i_w3b',
        ]);

    $db = $mongo->wai;

    return $db;
}

function get_images(){
    $db = get_db();
    return $db->images->find()->toArray();
}

function get_users(){
    $db = get_db();
    return $db->users->find()->toArray();
}

function get_user($query){
    $db = get_db();
    return $db->users->findOne($query);
}

function get_image($id){
    $db = get_db();
    return $db->images->findOne(['_id' => new ObjectID($id)]);
}

function save_image($id, $image){
    $db = get_db();

    if ($id == null) {
        $db->images->insertOne($image);
    } else {
        $db->images->replaceOne(['_id' => new ObjectID($id)], $image);
    }

    return true;
}

function create_user($user){
    $db = get_db();

    $db->users->insertOne($user);
    
    return true;
}

