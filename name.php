<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- css -->

    <title>Hachton_2021</title>
</head>
<body>

    <header>
            <!--Navbar--> 
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-light p-4">
                
                  <span class="text-muted"> <a href="paramettre.html">paramètre</a> </span> <br>
                  <span class="text-muted"> <a href="Mention_lega.html">Mention legal</a> </span>
                </div>
              </div>
              <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                 <img src="assets/image/logo_chronomiam.png" alt="" width="40%">
                </div>
              </nav>
  <!--/.Navbar-->
    </header>
    <div class="connexion"> 
    <div class="d-flex justify-content-center">   
        <p class="justify-content-center">
            <label for="name">Nom </label><br>
            <input type="text" placeholder="username" id="name" name="name" class="field">
           </p>
    </div> 
 
        <div class="d-flex justify-content-center mt-3 login_container"> 
           <button type="button" name="button" class="btn login_btn">Login</button>
        </div>
    </div>
    <form action="choixEtage.php">
  <button type="submit" class="btn btn-primary btn1"> Validé</button>
    </form>
  <!-- js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>