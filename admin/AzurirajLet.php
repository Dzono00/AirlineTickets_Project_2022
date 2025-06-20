<?php

require("conekcija.php");

if(isset($_POST['apdejtLEt']))
{
    $idLeta = $_POST['idLeta'];
    $AvioPrevoznik = $_POST['idAvioprevoznika'];
    $idAviona = $_POST['idAviona'];
    $aerodrom1 = $_POST['aerodrom1_id'];
    $aerodrom2 = $_POST['aerodrom2_id'];
    $pocetnoV = $_POST['pocetnoVreme'];
    $vremeSletanja = $_POST['VremeSletanja'];
    $sedista = $_POST['sedista'];
    $cena = $_POST['cena'];


$query="UPDATE let SET idAvioprevoznika='$_POST[idAvioprevoznika]',idAviona='$_POST[idAviona]',aerodrom1_id='$_POST[aerodrom1_id]', aerodrom2_id='$_POST[aerodrom2_id]', pocetnoVreme='$_POST[pocetnoVreme]', VremeSletanja='$_POST[VremeSletanja]', sedista='$_POST[sedista]', cena='$_POST[cena]' WHERE idLeta='$idLeta'";

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
