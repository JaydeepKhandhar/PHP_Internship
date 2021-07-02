<?php

$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "libmansys";
//connection established with database
$dbc = mysqli_connect($host, $username, $passwd, $dbname);

$q = mysqli_query($dbc, 
        "insert into tbl_user(user_name,user_mobile) values('jay','123')") 
        or die(mysqli_error($dbc));

if($q)
{
    echo "<script>alert('record added');</script>";
}