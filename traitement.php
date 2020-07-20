<?php
    $user = 'mamp';
    $password = '';
    $host = 'localhost';
    $port = 3306;
    $db = "demo"; 

    $mysql_connect($host,$user,$password);
    $mysql_select_db($db);
    
    if(isset($_POST['email'])){
        $mail = $_POST['email'];
        $pass = $_POST['password'];


        $sql = "SELECT * FROM loginform WHERE email='".$mail."'AND password='".$pass."' limit 1";
        $result = mysql_query($sql);

        if(mysql_num_rows($result)===1){
            echo "Successefully!";

        }else{
            echo "Fatal error";
        }
    }