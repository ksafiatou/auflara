<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Acceuil</title>
</head>
<body class="container-fluid ">

    <nav>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <a href="acceuille">
                <img src="{{asset('img/AUF.png')}}" alt="logo" class="logo w-100 ">
            </div></a>
            <div class="col-md-8 titre col-sm-12">
                GESTIONNAIRE DES ABONNES
            </div>
            <div class="col-md-1 titre">
                <a href="deconnexion.php" id ="logout"> 
                    <button type="button" class="btn btn-outline-danger ">
                    <span class="material-symbols-outlined" >
                            logout
                    </span>
                    </button>
                </a>
        </div>
    </nav>


@yield('content')


    <footer class="text-center text-text mt-5" style="background-color: #f1f1f1;">
                <div class="text-center text-light p-3" style="background-color:#A90A2F;">
                © 2022 Copyright:

                </div>
    </footer>
    </body>

</html>
