<?php

//host 
define("HOST", "localhost");

//dbname
define("DBNAME", "hotel-booking");

//user
define("USER",  "root");

//password
define("PASS", "");

$conn = mysqli_connect(HOST, USER, PASS, DBNAME);
//$conn = new PDO("mysql:host=".HOST."; dbname=".DBNAME,USER, PASS);

if($conn == true){
    echo "database connection is succcessfully made";

}
else{
    echo "error";
}