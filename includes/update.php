<?php 
    include '../assets/classes/database.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $residence = $_POST['residence'];
        $password = $_POST['password'];

        $date = date("Y-m-d h:i:s");

        $a = new database();
        $a->update('users',['name'=>$name,'email'=>$email,'phone'=>$phone,'username'=>$username,'residence'=>$residence,'password'=>$password,'updated'=>$date],"id='$id'");
        if ($a == true) {
            header('location: ../index.php');
        }
    }
?>>