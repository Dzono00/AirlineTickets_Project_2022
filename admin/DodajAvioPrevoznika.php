<?php

require("conekcija.php");

if(isset($_POST['dodajAvioP']))
{
    $ImeAvio = $_POST['imeAvioPrevoznika'];


$query="INSERT INTO avioprevoznik (imeAvioPrevoznika) VALUES('$ImeAvio')";

$rezultat = mysqli_query($con,$query);

if($rezultat)
{
    echo"<script>alert('Uspesno dodato')</script>";
    header("location:AdminPage.php");
}
else{
    echo "<script>alert('Nije dodato')</script>";
}
}











?>