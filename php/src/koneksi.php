<?php

 define('DB_SERVER','172.20.0.2');
 define('DB_USER' ,'admin');
 define('DB_PASS' ,'Azryan21_');
 define('DB_NAME' ,'web');

 $koneksi =mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
 //Check Connestion
if (mysqli_connect_errno())
{
    echo "Failed to connect to MYSQL: " .mysqli_connect_error();
}
?>
