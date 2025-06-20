<?php

require("conekcija.php");

if(isset($_POST['dodajLet']))
{
    $AvioPrevoznik = $_POST['idAvioprevoznika'];
    $idAviona = $_POST['idAviona'];
    $aerodrom1 = $_POST['aerodrom1_id'];
    $aerodrom2 = $_POST['aerodrom2_id'];
    $pocetnoV = $_POST['pocetnoVreme'];
    $vremeSletanja = $_POST['VremeSletanja'];
    $sedista = $_POST['sedista'];
    $cena = $_POST['cena'];


$query="INSERT INTO let(idAvioPrevoznika,idAviona,aerodrom1_id,aerodrom2_id,pocetnoVreme,VremeSletanja,sedista,cena) VALUES ('$AvioPrevoznik','$idAviona','$aerodrom1','$aerodrom2','$pocetnoV','$vremeSletanja','$sedista','$cena')";

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