<?php
session_start();

if(!isset($_SESSION['adminname'])){
    header('location:login.php');
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="../stil/style.css">
  <link rel="icon" href="../slike/impala-transparent-background-e1592484345454.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../stil/stilAdmine.css">
  <title>Impala Travel - Travel Agency With Great Tradition</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-srb">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="../slike/logo.png" alt="" width="90" height="100" class="d-inline-block align-text-top">

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <a href="logout.php" class="btn btn-success">Logout</a>
      </div>

    
   
  </nav>

  
<br><br>





        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Main</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Rezervisane karte</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">DODAJ AVIO PREVOZNIKA</span></a>
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-azuriraj-tab" data-toggle="pill" href="#v-pills-azuriraj" role="tab" aria-controls="v-pills-azuriraj" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">AZURIRAJ AVIO PREVOZNIKA</span></a>
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-obrisii-tab" data-toggle="pill" href="#v-pills-obrisii" role="tab" aria-controls="v-pills-obrisii" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">OBRISI AVIO PREVOZNIK</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Dodaj Let</span></a>
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-azurirajLet-tab" data-toggle="pill" href="#v-pills-azurirajLet" role="tab" aria-controls="v-pills-azurirajLet" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Azuriraj Let</span></a>
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-obrisiLet-tab" data-toggle="pill" href="#v-pills-obrisiLet" role="tab" aria-controls="v-pills-obrisiLet" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Obrisi let</span></a>

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-let-tab" data-toggle="pill" href="#v-pills-let" role="tab" aria-controls="v-pills-let" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">DODAJ AERODROM</span></a>
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-update-tab" data-toggle="pill" href="#v-pills-update" role="tab" aria-controls="v-pills-update" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">AZURIRAJ AERODROM</span></a>
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-delete-tab" data-toggle="pill" href="#v-pills-delete" role="tab" aria-controls="v-pills-delete" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">OBRISI AERODROM</span></a>
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4 class="font-italic mb-4">Dobrodosao Admine!</h4>
                        <p class="font-italic text-muted mb-2">Na ovoj stranici ces imati uvid u dodavanje,izmenu i brisanje, aviona i aerodroma i letova. Kao i uvid u bookirane karte!</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4">Bookings</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h4 class="font-italic mb-4">DODAJ AVIO PREVOZNIKA</h4>
                        <form action="DodajAvioPrevoznika.php" method="POST">
  <div class="form-group">
    <label for="imeAvioPrevoznika">Uneti ime avio prevoznika</label>
    <input type="text" class="form-control" name="imeAvioPrevoznika"id="imeAvioPrevoznika" aria-describedby="emailHelp" placeholder="NO. id">
  </div>

  <br>
  <input type="submit" name="dodajAvioP" class="btn btn-success"value="Submit">
  
</form>
<br>
<table class="table tabv">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">imeAvioPrevoznika</th>
    </tr>
   <?php 
    require("conekcija.php");
    $sql = "SELECT idAvioPrevoznika, imeAvioPrevoznika from AvioPrevoznik";
    $rezultat = $con->query($sql);
    if($rezultat){
      if($rezultat->num_rows>0){
        while($row=$rezultat->fetch_assoc()){
          echo "<tr><td>". $row['idAvioPrevoznika'] . "</td><td>" . $row['imeAvioPrevoznika'] . "</td></tr>";
        }
        echo "</table>";
      }
    } else{
      echo "0 result";
    }
   
   
   ?>
  </tbody>
</table>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-azuriraj" role="tabpanel" aria-labelledby="v-pills-azuriraj-tab">
                        <h4 class="font-italic mb-4">AZURIRAJ AVIO PREVOZNIKA</h4>
                        <form action="AzurirajAvioPrevoznika.php" method="POST">
                        <div class="form-group">
    <label for="idAvioPrevoznika">Uneti id avio prevoznika</label>
    <input type="text" class="form-control" name="idAvioPrevoznika"id="idAvioPrevoznika" aria-describedby="emailHelp" placeholder="NO. id">
  </div>
  <div class="form-group">
    <label for="imeAvioPrevoznika">Uneti ime avio prevoznika</label>
    <input type="text" class="form-control" name="imeAvioPrevoznika"id="imeAvioPrevoznika" aria-describedby="emailHelp" placeholder="NO. id">
  </div>

  <br>
  <input type="submit" name="azurirajavioP" class="btn btn-success"value="Submit">
  
</form>
<br>
<table class="table tabv">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">imeAvioPrevoznika</th>
    </tr>
   <?php 
    require("conekcija.php");
    $sql = "SELECT idAvioPrevoznika, imeAvioPrevoznika from AvioPrevoznik";
    $rezultat = $con->query($sql);
    if($rezultat){
      if($rezultat->num_rows>0){
        while($row=$rezultat->fetch_assoc()){
          echo "<tr><td>". $row['idAvioPrevoznika'] . "</td><td>" . $row['imeAvioPrevoznika'] . "</td></tr>";
        }
        echo "</table>";
      }
    } else{
      echo "0 result";
    }
   
   
   ?>
  </tbody>
</table>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-obrisii" role="tabpanel" aria-labelledby="v-pills-obrisii-tab">
                        <h4 class="font-italic mb-4">OBRISI AVIO PREVOZNIKA</h4>
                        <form action="ObrisiAvioPrevoznika.php" method="POST">
                        <div class="form-group">
    <label for="idAvioPrevoznika">Uneti id avio prevoznika</label>
    <input type="text" class="form-control" name="idAvioPrevoznika"id="idAvioPrevoznika" aria-describedby="emailHelp" placeholder="NO. id">
  </div>
  <br>
  <input type="submit" name="obrisiavioP" class="btn btn-success"value="Submit">
  
</form>
<br>
<table class="table tabv">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">imeAvioPrevoznika</th>
    </tr>
   <?php 
    require("conekcija.php");
    $sql = "SELECT idAvioPrevoznika, imeAvioPrevoznika from AvioPrevoznik";
    $rezultat = $con->query($sql);
    if($rezultat){
      if($rezultat->num_rows>0){
        while($row=$rezultat->fetch_assoc()){
          echo "<tr><td>". $row['idAvioPrevoznika'] . "</td><td>" . $row['imeAvioPrevoznika'] . "</td></tr>";
        }
        echo "</table>";
      }
    } else{
      echo "0 result";
    }
   
   
   ?>
  </tbody>
</table>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h4 class="font-italic mb-4">DODAJ LET</h4>
                        <form action="DodajLet.php" method="POST">
  <div class="form-group">
    <label for="imeAerodroma">Uneti avio prevoznika</label>
    <select name="idAvioprevoznika" id="avioPrevoznik">
      <?php 
      $avioPrevoznik = $con->query("SELECT * FROM avioprevoznik order by imeAvioPrevoznika asc");
      while($row=$avioPrevoznik->fetch_assoc()): ?>
      <option value="<?php echo $row['idAvioPrevoznika']?>" <?php echo isset($avioPrevoznikid) && $avioPrevoznikid==$row['idAvioPrevoznika'] ? "selected" : '' ?>><?php echo $row['imeAvioPrevoznika'] ?></option>
      <?php endwhile; ?>
    </select>
  </div>
  <br>
  <div class="form-group">
    <label  for="lokacijaAerodroma">Uneti id Aviona</label>
   <input name="idAviona" type="text"><?php echo isset($idAviona)? $idAviona : ''?></input>
  </div>
  <br>
  <div class="form-group">
    <label for="lokacijaAerodroma">Aerodrom odlazak</label>
   <select name="aerodrom1_id" id="aerodrom_lokacija">
     <?php
     $aerodrom = $con->query("SELECT * FROM aerodrom order by imeAerodroma asc");
     while($row=$aerodrom->fetch_assoc()):
     ?>
     <option value="<?php echo $row['idAerodroma'] ?> " <?php echo isset($aerodrom1_id) && $aerodrom1_id==$row['aerodrom1_id'] ? "selected" : ''?>><?php echo $row['lokacijaAerodroma'].", ".$row['imeAerodroma'] ?></option>
     <?php endwhile; ?>
   </select>
   
  </div>
  <br>
  <div class="form-group">
    <label for="lokacijaAerodroma">Aerodrom dolazak</label>
   <select name="aerodrom2_id" id="aerodrom_lokacija">
     <?php
     $aerodrom = $con->query("SELECT * FROM aerodrom order by imeAerodroma asc");
     while($row=$aerodrom->fetch_assoc()):
     ?>
     <option value="<?php echo $row['idAerodroma'] ?> " <?php echo isset($aerodrom1_id) && $aerodrom1_id==$row['aerodrom2_id'] ? "selected" : ''?>><?php echo $row['lokacijaAerodroma'].", ".$row['imeAerodroma'] ?></option>
     <?php endwhile; ?>
   </select>
   
  </div>
  <br>
  <div class="form-group">
    <label for="lokacijaAerodroma">Datum i vreme odlazak</label>
    <input type="datetime-local" name="pocetnoVreme" id="time" class="form-control datetimepicker" value="<?php echo isset($pocetnoVreme) ? date("Y-m-d H:i",strtotime($pocetnoVreme)) : '' ?>">
  </div>
  <br>
  <div class="form-group">
    <label for="lokacijaAerodroma">Datum i vreme dolazak</label>
    <input type="datetime-local" name="VremeSletanja" id="time" class="form-control datetimepicker" value="<?php echo isset($VremeSletanja) ? date("Y-m-d H:i",strtotime($VremeSletanja)) : '' ?>">
  </div>
  <br>
  <div class="form-group">
    <label for="lokacijaAerodroma">Sedista</label>
    <input type="number" name="sedista" id="sedista" step="any" value="<?php echo isset($sedista) ? $sedista : '' ?>">
  </div>
  <br>
  <div class="form-group">
    <label for="lokacijaAerodroma">Cena</label>
    <input type="number" name="cena" id="cena" step="any" value="<?php echo isset($cena) ? $cena : '' ?>">
  </div>
  <br>
  <input type="submit" name="dodajLet" class="btn btn-success"value="Submit">
</form>
<br>
<table class="table tabv">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">idAvioPrevoznika</th>
      <th scope="col">idAviona</th>
      <th scope="col">aerodrom1_id</th>
      <th scope="col">aerodrom2_id</th>
      <th scope="col">pocetnoVreme</th>
      <th scope="col">VremeSletanja</th>
      <th scope="col">sedista</th>
      <th scope="col">cena</th>
      
    </tr>
   <?php 
    require("conekcija.php");
    $sql = "SELECT idLeta, idAvioPrevoznika, idAviona, aerodrom1_id, aerodrom2_id, pocetnoVreme, VremeSletanja,sedista,cena from let";
    $rezultat = $con->query($sql);
    if($rezultat->num_rows>0){
      while($row=$rezultat->fetch_assoc()){
        echo "<tr><td>". $row['idLeta'] . "</td><td>" . $row['idAvioPrevoznika'] . "</td><td>" . $row['idAviona'] . "</td><td>". $row['aerodrom1_id'] . "</td><td>" .  $row['aerodrom2_id'] . "</td><td>" .  $row['pocetnoVreme'] . "</td><td>" .  $row['VremeSletanja']  . "</td><td>" . $row['sedista'] . "</td><td>" .  $row['cena'] . "</td></tr>";
      }
      echo "</table>";
    }
    else{
      echo "0 result";
    }
   
   ?>
  </tbody>
</table>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-azurirajLet" role="tabpanel" aria-labelledby="v-pills-azurirajLet-tab">
                        <h4 class="font-italic mb-4">Azuriraj LET</h4>
                        <form action="AzurirajLet.php" method="POST">
                        <div class="form-group">
    <label for="imeAerodroma">Uneti avio prevoznika</label>
    <input type="text" name="idLeta" id="idLeta">
  </div>
  <div class="form-group">
    <label for="imeAerodroma">Uneti avio prevoznika</label>
    <select name="idAvioprevoznika" id="avioPrevoznik">
      <?php 
      $avioPrevoznik = $con->query("SELECT * FROM avioprevoznik order by imeAvioPrevoznika asc");
      while($row=$avioPrevoznik->fetch_assoc()): ?>
      <option value="<?php echo $row['idAvioPrevoznika']?>" <?php echo isset($avioPrevoznikid) && $avioPrevoznikid==$row['idAvioPrevoznika'] ? "selected" : '' ?>><?php echo $row['imeAvioPrevoznika'] ?></option>
      <?php endwhile; ?>
    </select>
  </div>
  <br>
  <div class="form-group">
    <label  for="lokacijaAerodroma">Uneti id Aviona</label>
   <input name="idAviona" type="text"><?php echo isset($idAviona)? $idAviona : ''?></input>
  </div>
  <br>
  <div class="form-group">
    <label for="lokacijaAerodroma">Aerodrom odlazak</label>
   <select name="aerodrom1_id" id="aerodrom_lokacija">
     <?php
     $aerodrom = $con->query("SELECT * FROM aerodrom order by imeAerodroma asc");
     while($row=$aerodrom->fetch_assoc()):
     ?>
     <option value="<?php echo $row['idAerodroma'] ?> " <?php echo isset($aerodrom1_id) && $aerodrom1_id==$row['aerodrom1_id'] ? "selected" : ''?>><?php echo $row['lokacijaAerodroma'].", ".$row['imeAerodroma'] ?></option>
     <?php endwhile; ?>
   </select>
   
  </div>
  <br>
  <div class="form-group">
    <label for="lokacijaAerodroma">Aerodrom dolazak</label>
   <select name="aerodrom2_id" id="aerodrom_lokacija">
     <?php
     $aerodrom = $con->query("SELECT * FROM aerodrom order by imeAerodroma asc");
     while($row=$aerodrom->fetch_assoc()):
     ?>
     <option value="<?php echo $row['idAerodroma'] ?> " <?php echo isset($aerodrom1_id) && $aerodrom1_id==$row['aerodrom2_id'] ? "selected" : ''?>><?php echo $row['lokacijaAerodroma'].", ".$row['imeAerodroma'] ?></option>
     <?php endwhile; ?>
   </select>
   
  </div>
  <br>
  <div class="form-group">
    <label for="lokacijaAerodroma">Datum i vreme odlazak</label>
    <input type="datetime-local" name="pocetnoVreme" id="time" class="form-control datetimepicker" value="<?php echo isset($pocetnoVreme) ? date("Y-m-d H:i",strtotime($pocetnoVreme)) : '' ?>">
  </div>
  <br>
  <div class="form-group">
    <label for="lokacijaAerodroma">Datum i vreme dolazak</label>
    <input type="datetime-local" name="VremeSletanja" id="time" class="form-control datetimepicker" value="<?php echo isset($VremeSletanja) ? date("Y-m-d H:i",strtotime($VremeSletanja)) : '' ?>">
  </div>
  <br>
  <div class="form-group">
    <label for="lokacijaAerodroma">Sedista</label>
    <input type="number" name="sedista" id="sedista" step="any" value="<?php echo isset($sedista) ? $sedista : '' ?>">
  </div>
  <br>
  <div class="form-group">
    <label for="lokacijaAerodroma">Cena</label>
    <input type="number" name="cena" id="cena" step="any" value="<?php echo isset($cena) ? $cena : '' ?>">
  </div>
  <br>
  <input type="submit" name="apdejtLEt" class="btn btn-success"value="Submit">
</form>
<br>
<table class="table tabv">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">idAvioPrevoznika</th>
      <th scope="col">idAviona</th>
      <th scope="col">aerodrom1_id</th>
      <th scope="col">aerodrom2_id</th>
      <th scope="col">pocetnoVreme</th>
      <th scope="col">VremeSletanja</th>
      <th scope="col">sedista</th>
      <th scope="col">cena</th>
      
    </tr>
   <?php 
    require("conekcija.php");
    $sql = "SELECT idLeta, idAvioPrevoznika, idAviona, aerodrom1_id, aerodrom2_id, pocetnoVreme, VremeSletanja,sedista,cena from let";
    $rezultat = $con->query($sql);
    if($rezultat->num_rows>0){
      while($row=$rezultat->fetch_assoc()){
        echo "<tr><td>". $row['idLeta'] . "</td><td>" . $row['idAvioPrevoznika'] . "</td><td>" . $row['idAviona'] . "</td><td>". $row['aerodrom1_id'] . "</td><td>" .  $row['aerodrom2_id'] . "</td><td>" .  $row['pocetnoVreme'] . "</td><td>" .  $row['VremeSletanja']  . "</td><td>" . $row['sedista'] . "</td><td>" .  $row['cena'] . "</td></tr>";
      }
      echo "</table>";
    }
    else{
      echo "0 result";
    }
   
   ?>
  </tbody>
</table>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-obrisiLet" role="tabpanel" aria-labelledby="v-pills-obrisiLet-tab">
                        <h4 class="font-italic mb-4">Obrisi LET</h4>
                        <form action="ObrisiLet.php" method="POST">
                        <div class="form-group">
    <label for="imeAerodroma">Uneti id leta</label>
    <input type="text" name="idLeta" id="idLeta">
  </div>
  
  <input type="submit" name="obrisiLet" class="btn btn-success"value="Submit">
</form>
<br>
<table class="table tabv">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">idAvioPrevoznika</th>
      <th scope="col">idAviona</th>
      <th scope="col">aerodrom1_id</th>
      <th scope="col">aerodrom2_id</th>
      <th scope="col">pocetnoVreme</th>
      <th scope="col">VremeSletanja</th>
      <th scope="col">sedista</th>
      <th scope="col">cena</th>
      
    </tr>
   <?php 
    require("conekcija.php");
    $sql = "SELECT idLeta, idAvioPrevoznika, idAviona, aerodrom1_id, aerodrom2_id, pocetnoVreme, VremeSletanja,sedista,cena from let";
    $rezultat = $con->query($sql);
    if($rezultat->num_rows>0){
      while($row=$rezultat->fetch_assoc()){
        echo "<tr><td>". $row['idLeta'] . "</td><td>" . $row['idAvioPrevoznika'] . "</td><td>" . $row['idAviona'] . "</td><td>". $row['aerodrom1_id'] . "</td><td>" .  $row['aerodrom2_id'] . "</td><td>" .  $row['pocetnoVreme'] . "</td><td>" .  $row['VremeSletanja']  . "</td><td>" . $row['sedista'] . "</td><td>" .  $row['cena'] . "</td></tr>";
      }
      echo "</table>";
    }
    else{
      echo "0 result";
    }
   
   ?>
  </tbody>
</table>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-let" role="tabpanel" aria-labelledby="v-pills-let-tab">
                        <h4 class="font-italic mb-4">Dodaj Aerodrom</h4>
                        <div class="row">
                          <div class="column1">
                          <form action="AddAerodroma.php" method="POST">
  <div class="form-group">
    <label for="imeAerodroma">Uneti Aerodrom</label>
    <input type="text" name="imeAerodroma"class="form-control" id="imeAerodroma" aria-describedby="emailHelp" placeholder="Uneti Aerodrom">
  </div>
  <div class="form-group">
    <label for="lokacijaAerodroma">Uneti lokaciju</label>
    <input type="text" name="lokacijaAerodroma"class="form-control" id="lokacijaAerodroma">
  </div>
  <br>
  
  <input type="submit" name="dodaj" class="btn btn-success"value="Submit">
<br>
</form>
                          </div>
                         
                          <div class="column2">
                          <br>
                          <table class="table tabv">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">imeAerodroma</th>
      <th scope="col">lokacijaAerodroma</th>
    </tr>
   <?php 
    require("conekcija.php");
    $sql = "SELECT idAerodroma, imeAerodroma, lokacijaAerodroma from aerodrom";
    $rezultat = $con->query($sql);
    if($rezultat->num_rows>0){
      while($row=$rezultat->fetch_assoc()){
        echo "<tr><td>". $row['idAerodroma'] . "</td><td>" . $row['imeAerodroma'] . "</td><td>" . $row['lokacijaAerodroma'] . "</td></tr>";
      }
      echo "</table>";
    }
    else{
      echo "0 result";
    }
   
   ?>
  </tbody>
</table>
                          </div>
                        

                        </div>
                        
 
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-delete" role="tabpanel" aria-labelledby="v-pills-delete-tab">
                        <h4 class="font-italic mb-4">Delete Aerodrom</h4>
                        <div class="row">
                          <div class="column1">
                          <form action="DeleteAerodrom.php" method="POST">
                          <div class="form-group">
    <label for="imeAerodroma">Uneti id Aerodroma</label>
    <input type="text" name="idAerodroma"class="form-control" id="idAerodroma" aria-describedby="emailHelp" placeholder="Uneti Aerodrom">
  </div>
  <br>
  
  <input type="submit" name="delete" class="btn btn-success"value="Delete">
  <br>
</form>
                          </div>
                          
                          <div class="column2">
                          <br>
                          <table class="table tabv">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">imeAerodroma</th>
      <th scope="col">lokacijaAerodroma</th>
    </tr>
   <?php 
    require("conekcija.php");
    $sql = "SELECT idAerodroma, imeAerodroma, lokacijaAerodroma from aerodrom";
    $rezultat = $con->query($sql);
    if($rezultat->num_rows>0){
      while($row=$rezultat->fetch_assoc()){
        echo "<tr><td>". $row['idAerodroma'] . "</td><td>" . $row['imeAerodroma'] . "</td><td>" . $row['lokacijaAerodroma'] . "</td></tr>";
      }
      echo "</table>";
    }
    else{
      echo "0 result";
    }
   
   ?>
  </tbody>
</table>
                          </div>
                        

                        </div>
                </div>
                <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-update" role="tabpanel" aria-labelledby="v-pills-update-tab">
                        <h4 class="font-italic mb-4">Update Aerodrom</h4>
                        <div class="row">
                          <div class="column1">
                          <form action="UpdateAerodroma.php" method="POST">
                          <div class="form-group">
    <label for="imeAerodroma">Uneti id Aerodroma</label>
    <input type="text" name="idAerodroma"class="form-control" id="idAerodroma" aria-describedby="emailHelp" placeholder="Uneti Aerodrom">
  </div>
  <div class="form-group">
    <label for="imeAerodroma">Uneti Aerodrom</label>
    <input type="text" name="imeAerodroma"class="form-control" id="imeAerodroma" aria-describedby="emailHelp" placeholder="Uneti Aerodrom">
  </div>
  <div class="form-group">
    <label for="lokacijaAerodroma">Uneti lokaciju</label>
    <input type="text" name="lokacijaAerodroma"class="form-control" id="lokacijaAerodroma">
  </div>
  <br>
  
  <input type="submit" name="update" class="btn btn-success"value="Update">
  <br>
</form>
                          </div>
                          
                          <div class="column2">
                          <br>
                          <table class="table tabv">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">imeAerodroma</th>
      <th scope="col">lokacijaAerodroma</th>
    </tr>
   <?php 
    require("conekcija.php");
    $sql = "SELECT idAerodroma, imeAerodroma, lokacijaAerodroma from aerodrom";
    $rezultat = $con->query($sql);
    if($rezultat->num_rows>0){
      while($row=$rezultat->fetch_assoc()){
        echo "<tr><td>". $row['idAerodroma'] . "</td><td>" . $row['imeAerodroma'] . "</td><td>" . $row['lokacijaAerodroma'] . "</td></tr>";
      }
      echo "</table>";
    }
    else{
      echo "0 result";
    }
   
   ?>
  </tbody>
</table>
                          </div>
                        

                        </div>
                </div>
            </div>
        </div>
    

<br><br>

        


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
