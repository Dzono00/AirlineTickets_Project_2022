<?php
require("dbConnect.php");

if(isset($_POST['register'])){
    $ime=$_POST['Ime'];
    $prezime=$_POST['Prezime'];
    $username=$_POST['Username'];
    $password=$_POST['Password'];
    $confpass=$_POST['ConfirmPassword'];
    $pol=$_POST['Pol'];
    $godine=$_POST['Godine'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $pasos=$_POST['brPasos'];
    $duplirano = mysqli_query($con,"SELECT * FROM putnici WHERE USERNAME='$username' OR email='$email'");
    if(mysqli_num_rows($duplirano)>0){
        echo "<script>alert('Username ili email vec postoje');</script>";
    }
    else{
        if($password==$confpass){
            $query="INSERT INTO putnici (IME_PUTNIKA,PREZIME_PUTNIKA,USERNAME,PASSWORD,CONF_PASSWORD,POL,GODINE,EMAIL,TELEFON,BROJ_PASOSA) VALUES ('$ime','$prezime','$username','$password','$confpass','$pol','$godine','$email','$tel','$pasos')";
           $insert= mysqli_query($con,$query);
            
    }

  

    if(!$insert){
        echo"BIo je neki problem";
    }
    else{
        echo "<script class='alert alert-success'>alert(Uspesno ste registrovani)</script>";
    }

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
  <link rel="icon" href="./slike/impala-transparent-background-e1592484345454.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Impala Travel - Travel Agency With Great Tradition</title>
</head>

<body>
 

  
<br><br>
<form action="registerstranica.php" method="POST">

<div class="container mt-5 mb-5">

<div class="row d-flex align-items-center justify-content-center">

  <div class="col-md-6">


    <div class="card px-5 py-5">

      <span class="circle"><i class="fa fa-check"></i></span>

      <h5 class="mt-3">Registrujte se danas i<br> bookirajte kartu u jednom trenu!</h5>
      <small class="mt-2 ">Ukoliko se registrujete imacete pravo da bukirate kartu i da uvidite svoje prethodne rezervacije.</small>

      <div class="form-input">

<i class="far fa-user-circle"></i>
<input type="text" name="Ime" class="form-control" placeholder="Ime">

</div>
<div class="form-input">

<i class="far fa-user-circle"></i>
<input type="text" name="Prezime" class="form-control" placeholder="Prezime">

</div>


      <div class="form-input">

        <i class="fa fa-user"></i>
        <input type="text" name="Username" class="form-control" placeholder="Username">
        
      </div>


      <div class="form-input">

        <i class="fa fa-lock"></i>
        <input type="text" name="Password" class="form-control" placeholder="password">
        
      </div>
      <div class="form-input">

<i class="fa fa-lock"></i>
<input type="text"  name="ConfirmPassword" class="form-control" placeholder="Confirm Password">

</div>
      <div class="form-input">

<i class="fa fa-envelope"></i>
<input type="text"  name="email" class="form-control" placeholder="Email address">

</div>

      <div class="form-input">

      <i class="fas fa-phone-alt"></i>
<input type="text" name="tel" class="form-control" placeholder="Telefon">

</div>
<div class="form-input">

<i class="fas fa-venus-mars"></i>
<input type="text"  name="Pol" class="form-control" placeholder="Pol">

</div>
<div class="form-input">

<i class="fas fa-venus-mars"></i>
<input type="text"  name="Godine" class="form-control" placeholder="Godine">

</div>
      <div class="form-input">

      <i class="fas fa-passport"></i>
<input type="text" name="brPasos" class="form-control" placeholder="BrojPasosa">

</div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
          Slazem se sa svim uslovima
        </label>
      </div>


      <button class="btn btn-primary mt-4 signup" type="submit" name="register">Registrujte se!</button>


      <div class="text-center mt-3">

        <span>Pronadjite nas na drustvenim mrezama</span>
        
      </div>


      <div class="d-flex justify-content-center mt-4">
        
        <span class="social"><i class="fa fa-google"></i></span>
        <span class="social"><i class="fa fa-facebook"></i></span>
        <span class="social"><i class="fa fa-twitter"></i></span>
        <span class="social"><i class="fa fa-linkedin"></i></span>
      </div>


      <div class="text-center mt-4">
        
        <span>Vec ste registrovani?</span>
        <a href="#" class="text-decoration-none">Ulogujte se</a>

      </div>
      
    </div>


    
  </div>
  
</div>

</div>
</form>
<br>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    
</body>

</html>

