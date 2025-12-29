<?php
    session_start();
    include('connection/db.php');
    include('connection/operation.php');

    $username=$_SESSION['username'];

    $db_connect=new db_connect();
    $db= $db_connect->connect();

    $operation=new operation($db);
    $operation->cancel_vacancy($username);

    header('location: vacancy.php');
?>