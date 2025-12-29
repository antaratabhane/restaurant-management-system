<?php
    session_start();

    $id=$_POST['id'];

    include('connection/db.php');
    include('connection/operation.php');

    $db_connect=new db_connect();
    $db=$db_connect->connect();

    $operation=new operation($db);
    $operation->edit_order($id);

    if($_SESSION['username'] == 'manager'){
        header('location: manager.php');
    }
    else{
        header('location: chef.php');
    }
?>