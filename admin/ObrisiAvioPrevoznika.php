<?php


require("conekcija.php");

if(isset($_POST['obrisiavioP']))
{
    $idAvioPrevoznika=$_POST['idAvioPrevoznika'];


$query="DELETE FROM  avioprevoznik WHERE idAvioPrevoznika='$idAvioPrevoznika'";

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