<?php



require("dbConnect.php");

if(isset($_POST['loginn'])){
    $username = $_POST['Username'];
    $password=$_POST['Password'];

    $sql = "SELECT * FROM putnici WHERE Username='$username' AND Password='$password'";

    $query=mysqli_query($con,$sql);

    $row=mysqli_num_rows($query);
        if($row==1){
            echo "login uspesan!";
            $_SESSION['Username']=$username;
            header('location:Home.php');
        
    }else{
        echo "login nije uspeo!";
        header("location:Login.php");
    }
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

  <link rel="stylesheet" href="./stil/style.css">
  <link rel="stylesheet" href="./stil/stilLogin.css">
  <link rel="stylesheet" href="./stil/stylecoockie.css">
  <link rel="icon" href="./slike/impala-transparent-background-e1592484345454.png">

  <title>Impala Travel - Travel Agency With Great Tradition</title>
</head>

<body>
 
<form action="" method="POST">

<div class="container mt-5 mb-5">

<div class="row d-flex align-items-center justify-content-center">

  <div class="col-md-6">


    <div class="card px-5 py-5">

      <span class="circle"><i class="fa fa-check"></i></span>

      <h5 class="mt-3">Loginujte se i <br> bookirajte kartu u jednom trenu!</h5>




      <div class="form-input">

        <i class="fa fa-user"></i>
        <input type="text" name="Username" class="form-control" placeholder="Username">
        
      </div>


      <div class="form-input">

        <i class="fa fa-lock"></i>
        <input type="text" name="Password" class="form-control" placeholder="password">
        
      </div>
      <button class="btn btn-primary mt-4 signup" type="submit" name="loginn">Registrujte se!</button>


</div>
</form>

  
<br>

<br>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script src="./js/funkcije.js"></script>
  <script src="./js/coockies.js"></script>
    
</body>

</html>