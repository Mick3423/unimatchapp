
<?php
require "settings/init.php";
$match = $db->sql("SELECT * FROM matchfilter WHERE MatchId = 1");
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>profilside</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"></a>
                </li>


            </ul>

        </div>
    </div>
</nav>


<div class="container col-12 col-sm-12 justify-content-center align-items-center mt-3">
    <div class="row">
     <div class="card col-sm-12 col-md-6 col-lg-4">
         <img src="uploads/<?php echo $match[0]->MatchBillede; ?> ">
                     <div class="card-body">

                         <p class="card-text"><?php echo$match[0]->MatchBeskrivelse; ?> </p>
                         <p class="card-text">interresser; <?php echo $match[0]->MatchInteresse; ?> </p>


                     </div>
                 </div>
    </div>
</div>


<footer>
    <div class="container-fluid text-dark text-center bg-primary h-100 mt-3">


        <a class="btn btn-outline-dark btn-floating mb-2" href="profilListe.php" role="button">
            <i class="fa-solid fa-house"></i>
        </a>

        <a class="btn btn-outline-dark btn-floating mb-2" href="#" role="button">
            <i class="fa-solid fa-heart"></i>
        </a>
        <a class="btn btn-outline-dark btn-floating mb-2" href="kalender.php " role="button">
            <i class="fa-solid fa-calendar-days"></i>
        </a>
        <a class="btn btn-outline-dark btn-floating mb-2" href="#" role="button">
            <i class="fa-solid fa-comments"></i>
        </a>
        <a class="btn btn-outline-dark btn-floating mb-2" href="profilprivat.php" role="button">
            <i class="fa-solid fa-user"></i>
        </a>


    </div>
</footer>




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
