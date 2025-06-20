<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./slike/impala-transparent-background-e1592484345454.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./stil/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
 

    <title>Impala Travel - Travel Agency With Great Tradition</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-srb">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="./slike/logo.png" alt="" width="90" height="100" class="d-inline-block align-text-top">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link " aria-current="page" href="index.php">Početna</a>
                    <a class="nav-link active" href="kontakt.php">Kontakt</a>
                </div>
            </div>

    </nav>
    <div class="container">
       <h2 class="display-4 text-black">Kontakt</h2>
       <hr class="mt-2 mb-5 bg-light">
       <div class="row">
         <div class="col-lg-6 col-md-6">
           <form id="registration" method="post"action="">
             <div class="from-group text-black"> 
               <label for="Ime" class="form-label">Ime</label> 
              <input type="text" class="form-control form-control-sm" id="Ime" name="Ime" placeholder="Unesite Vaše ime">
              <p id="poruka-Ime"></p>
            </div>
            <div class="from-group text-black"> 
              <label for="Prezime" class="form-label">Prezime</label> 
             <input type="text" class="form-control form-control-sm" id="Prezime" name="Prezime" placeholder="Unesite Vaše prezime">
             <p id="poruka-Prezime"></p>
           </div>
           <div class="form-group text-black">
            <label for="email" class="form-label">Email</label> 
            <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Unesite e-mail">
            <p id="poruka-Email"></p>
           </div>
           <div class="form-group text-black">
            <label for="Poruka" class="form-label">Poruka</label>
            <textarea id="Poruka" minlength="3" class="form-control" rows="3"></textarea>
            <p id="poruka-Poruka"></p>
        </div>
         <button   type="button" class="btn btn-outline-success btn-lg btn-block btn_validacija" data-bs-toggle="modal"> Pošalji</button>
         <div class="modal fade" id="modalniProzor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Poruka je uspešno poslata</h5>
                      <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      Uspešno ste nas kontaktirali.
                  </div>
                  <div class="modal-footer">
                      <button type="button" class=" btn btn-outline-dark btn-lg" data-bs-dismiss="modal">Zatvori</button>
                  </div>
              </div>
          </div>
      </div>
    </div>
           </form>
           <div class="col-lg-6 col-md-6  text-black">
            <ul class="list-unstyled">
             <li><i class="fas fa-map-marker-alt"></i> Adresa: <span class="float-right">Kumodraška 10, Beograd 11000</span></li>
             <li><i class="fas fa-phone"></i> Telefon: <span class="float-right"><a href="tel:+381 2497882">011/2497/882</span></a></li>
             <li><i class="far fa-envelope"></i> E-mail: <span class="float-right"><a href="mailto:office@impalayu.com">office@impalayu.com</a></span></li>
            </ul>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11327.310682669391!2d20.4753453!3d44.7843185!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2dad5534003679eb!2sImpala%20Travel!5e0!3m2!1sen!2srs!4v1652644495737!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
     </div> <br><br>
     </div>
      



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="java.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>