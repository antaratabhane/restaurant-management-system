<?php
    session_start();
    include('connection/db.php');
    include('connection/operation.php');
    
    $table_numbers=$_POST['number'];
    $username=$_SESSION['username'];

    $db_connect=new db_connect();
    $db= $db_connect->connect();

    $operation=new operation($db);
    foreach($table_numbers as $table_number){
        $operation->insert_vacancy($table_number, $username);
    }
?>