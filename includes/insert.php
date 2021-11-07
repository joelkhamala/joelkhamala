<?php 
    include '../assets/classes/database.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $residence = $_POST['residence'];
        $password = $_POST['password'];

        $date = date("Y-m-d H:i:s");

        $not = date("Y-m-d H:i:s");

        $a = new database();
        $a->insert('users',['name'=>$name,'email'=>$email,'phone'=>$phone,'username'=>$username,'residence'=>$residence,'password'=>$password,'created'=>$date,'updated'=>$not]);
        if ($a == true) {
            header('location: ../index.php');
        }
    }
?>