<?php
    session_start();
    include('connection/db.php');
    include('connection/operation.php');

    $username=$_POST['username'];
    $unique_id=$_POST['unique_id'];

    $db_connect=new db_connect();
    $db=$db_connect->connect();

    $operation=new operation($db);
    $result=$operation->authorization($username, $unique_id);

    $user=mysqli_fetch_assoc($result);

    if($user){
        $_SESSION['username']=$user['username'];
        
        if($user['username'] == 'manager'){
            header('location:manager.php');
            exit;
        }
        elseif($user['username'] == 'chef'){
            header('location:chef.php');
            exit;
        }
        elseif($user['username'] == 'waiter'){
            header('location:waiter.php');
            exit;
        }
        else{
            header('location:customer.php');
            exit;
        }
    }
?>