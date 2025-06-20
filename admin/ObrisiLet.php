<?php


require("conekcija.php");

if(isset($_POST['obrisiLet']))
{
    $idLeta=$_POST['idLeta'];


$query="DELETE FROM  let WHERE idLeta='$idLeta'";

$rezultat = mysqli_query($con,$query);

if($rezultat)
{
    echo"<script>alert('Uspesno izmenjeno')</script>";
    header("location:AdminPage.php");
}
else{
    echo "<script>alert('Nije izmenjeno')</script>";
}
}


?>