<?php
    class operation{
        private $db;
        function __construct($conn){
            $this->db=$conn;
        }

        function insert($username, $email,  $contact, $unique_id){
            $sql_insert="insert into user_info(username,email,contact,unique_id) values('$username', '$email',  '$contact', '$unique_id')";
            mysqli_query($this->db, $sql_insert);
            header('location: login.php');
        }

        function authorization($username, $unique_id){
            $sql_authorization=" select * from `user_info` where `username`='$username' and `unique_id`='$unique_id' ";
            $result=mysqli_query($this->db, $sql_authorization);
            return  $result;
        }

        function insert_vacancy($table_no, $username){
            $sql_insert_vacancy="insert into `vacancy`(`username`, `table_no`) values('$username', '$table_no');";
            mysqli_query($this->db,$sql_insert_vacancy);
        }

        function cancel_vacancy($username){
            $sql_cancel_vacancy="delete from `vacancy` where `username`='$username'";
            mysqli_query($this->db,  $sql_cancel_vacancy);
            header('location: vacancy.php');
            exit();
        }

        function insert_orders($username, $name, $qty, $amount){
            $sql_insert_orders="insert into `orders`(`username`, `ordered_items`, `quantity`, `amount`) values('$username', '$name', '$qty', '$amount')";
            mysqli_query($this->db, $sql_insert_orders);
            header('location: orders.php');
        }

        function cancel_orders($username){
            $sql_cancel_orders="delete from `orders` where `username`='$username' ";
            mysqli_query($this->db, $sql_cancel_orders);
            header('location: orders.php');
        }

        function import_orders(){
            $sql_import_orders="select `id`, `username`, `ordered_items`, `quantity` from `orders`";
            $orders=mysqli_query($this->db, $sql_import_orders);
            return $orders;
        }

        function edit_order($id){
            $sql_edit_order="delete from `orders` where `id`='$id' ";
            mysqli_query($this->db, $sql_edit_order);
        }

        function import_vacancies(){
            $sql_import_vacancies="select `id`, `username`, `table_no` from `vacancy`";
            $vacancies=mysqli_query($this->db, $sql_import_vacancies);
            return $vacancies;
        }

        function edit_vacancy($id){
            $sql_edit_vacancy="delete from `vacancy` where id='$id' ";
            mysqli_query($this->db, $sql_edit_vacancy);
        }

        function statistics(){
            $sql_orders=mysqli_query($this->db, "select count(*) as res1 from `orders`");
            $sql_sales=mysqli_query($this->db, "select sum(quantity * amount) as res2 from `orders`");
            $sql_vacancies=mysqli_query($this->db, "select count(table_no) as res3 from `vacancy`");

            $res1=mysqli_fetch_assoc($sql_orders)['res1'];
            $res2=mysqli_fetch_assoc($sql_sales)['res2'];
            $res3=mysqli_fetch_assoc($sql_vacancies)['res3'];

            return [
                "order" => $res1,
                "sale" => $res2,
                "vacancy" => $res3
            ];
        }
    }
?>