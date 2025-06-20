<?php

require("conekcija.php");

if(isset($_POST['dodaj']))
{
    $ImeAer = $_POST['imeAerodroma'];
    $lokacijaAer = $_POST['lokacijaAerodroma'];


$query="INSERT INTO aerodrom (imeAerodroma, lokacijaAerodroma) VALUES('$ImeAer','$lokacijaAer')";

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