<?php

session_start();

require("conekcija.php");

if(isset($_POST['login'])){
   
    $admin = $_POST['adminname'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM adminn WHERE adminName='$admin' AND apassword='$password'";

    $query=mysqli_query($con,$sql);

    $row=mysqli_num_rows($query);
        if($row==1){
            echo "login uspesan!";
            $_SESSION['adminname']=$admin;
            header('location:AdminPage.php');
        
    }else{
        echo "login nije uspeo!";
        header("location:login.php");
    }
}




?>