<?php

require("conekcija.php");

if(isset($_POST['update']))
{
    $idAerodroma=$_POST['idAerodroma'];
    $ImeAer = $_POST['imeAerodroma'];
    $lokacijaAer = $_POST['lokacijaAerodroma'];


$query="UPDATE aerodrom SET imeAerodroma='$_POST[imeAerodroma]',lokacijaAerodroma='$_POST[lokacijaAerodroma]' WHERE idAerodroma='$idAerodroma'";

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
