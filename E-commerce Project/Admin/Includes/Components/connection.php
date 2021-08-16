<?php 
    $dsn = "mysql:host=localhost;dbname=ecomerce_store";
    $user = "root";
    $pass = "";
    $option = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    );
    try{
        $con = new PDO($dsn,$user,$pass,$option);
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //echo "Success To Connect To Database ";
    }
    catch(PDOException $ex){
        echo "Faild To Connect To Database " . $ex->getMessage();
    }
?>
