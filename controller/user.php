<?php

require('koneksi.php');

$clmn = [''];
getListWarga();

function getListWarga(){
  global $link;
  
  $sql    = "SELECT * FROM user WHERE user_type = 2";
  $result = $link->query($sql);
  echo "test";
  $rows   = $result->num_rows;
  $reply  = "";

  if ($rows > 0) {
    $nomor = 1;
    while($row = $result->fetch_assoc()){
      echo $row;
    }
  }

  echo "test";
}