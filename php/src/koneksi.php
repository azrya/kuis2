<?php

 $host ='10.0.0.129';
 $username = 'admin';
 $password = 'Azryan21_';
 $database = 'web';
 $koneksi =mysqli_connect($host, $username, $password, $database);
 //Check Connection
if ($koneksi)
{
    die('koneksi database gagal: ' .mysqli_connect_error());
}
?>
