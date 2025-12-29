<?php
    session_start();
    $_SESSION['orders'][]=[
        "name" => $_POST['name'],
        "amount" => $_POST['amount']
    ];
?>