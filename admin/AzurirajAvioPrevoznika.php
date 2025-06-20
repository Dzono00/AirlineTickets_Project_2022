<?php

require("conekcija.php");

if(isset($_POST['azurirajavioP']))
{
    $idAvioPrevoznika=$_POST['idAvioPrevoznika'];
    $ImeAvioPrevoznika = $_POST['imeAvioPrevoznika'];


$query="UPDATE avioprevoznik SET imeAvioPrevoznika='$_POST[imeAvioPrevoznika]' WHERE idAvioPrevoznika='$idAvioPrevoznika'";

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
