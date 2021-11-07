<?php 
    include '../assets/classes/database.php';

    $id = $_POST['id'];

    $a = new database();
    $a->delete('users',"id='$id'");
?>