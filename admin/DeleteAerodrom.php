<?php


require("conekcija.php");

if(isset($_POST['delete']))
{
    $idAerodroma=$_POST['idAerodroma'];


$query="DELETE FROM  aerodrom WHERE idAerodroma='$idAerodroma'";

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