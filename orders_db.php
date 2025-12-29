<?php
    $data = json_decode(file_get_contents("php://input"), true);
    $quantities=$data['quantities'];
    session_start();
    include('connection/db.php');
    include('connection/operation.php');
    $db_connect=new db_connect();
    $db= $db_connect->connect();

    $operation=new operation($db);
    $username=$_SESSION['username'];
    $orders=$_SESSION['orders'];
    foreach($orders as $i => $item) {
        $qty=$quantities[$i];
        $operation->insert_orders($username, $item['name'], $qty, $item['amount']);
    }
?>