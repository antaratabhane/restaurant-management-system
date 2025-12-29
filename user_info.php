<?php
    include('connection/db.php');
    include('connection/operation.php');

    $username=$_POST['username'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $unique_id=$_POST['unique_id'];

    $db_connect= new db_connect();
    $db=$db_connect->connect();

    $operation= new operation($db);
    $operation->insert($username,$email,$contact,$unique_id);

    header('location: login.php');
?>