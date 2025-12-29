<?php
    session_start();
    include('connection/db.php');
    include('connection/operation.php');
    $db_connect=new db_connect();
    $db= $db_connect->connect();

    $operation=new operation($db);
    $username=$_SESSION['username'];
    $operation->cancel_orders($username);
    unset($_SESSION['orders']);
?>