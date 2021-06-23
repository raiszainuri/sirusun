<?php

require('koneksi.php');

function getListWarga(){
    global $link;
    
    $sql    = "SELECT * FROM user WHERE user_type = 2";
    $result = $link->query($sql);
    $rows   = $result->num_rows;

    if($rows > 0){
        return $result;
    }else{
        return 0;
    }
}

function addUser(){
    global $link;
    
    $sql    = "INSERT INTO user VALUES
                (null,
                '$data[0]',
                '$data[1]',
                '$data[2]',
                '$data[3]',
                '$data[4]',
                '$data[5]',
                '$data[6]',
                '".md5($data[7])."',
                2)";
    $result = $link->query($sql);
    $rows   = $result->num_rows;

    if($rows > 0){
        return $result;
    }else{
        return 0;
    }
}