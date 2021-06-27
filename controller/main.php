<?php

require('koneksi.php');

//getForm
{
    if(array_key_exists('btnTambahWarga', $_POST)) {
        $data = array(
            $_POST['no_pokok'],
            $_POST['nama'],
            $_POST['tgl_lahir'],
            $_POST['r_jk'],
            $_POST['alamat'],
            $_POST['no_hp'],
            $_POST['email'],    
            md5($_POST['password'])
        );

        addUser($data);
    }
}

//function
{
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
    
    function addUser($data){
        global $link;
        
        $current_time = date('Y-m-d h:i:s');
        $sql    = "INSERT INTO user VALUES(
                    null,
                    '$data[0]',
                    '$data[1]',
                    '$data[2]',
                    '$data[3]',
                    '$data[4]',
                    '$data[5]',
                    '$data[6]',
                    '$data[7]',
                    2,
                    '$current_time'
                )";
        echo $sql;
        $result = $link->query($sql);
    
        if($result){
            header('Location: daftar_warga.php');
            ob_end_flush();
        }else{
            echo $link->error;
            echo "Gagal";
        }
    }

    function delete($){
        global $link;

        
    }
}

?>
