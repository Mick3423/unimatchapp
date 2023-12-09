
<?php
require "settings/init.php";
$match = $db->sql("SELECT * FROM matchfilter WHERE MatchId = 1");
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Profilprivat</title>

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


<div class="container justify-content-center align-items-center col-12 col-sm-12 mt-3">
    <div class="row">
        <div class="card col-sm-12 col-md-6 col-lg-4 overflow-hidden">
            <img src="uploads/<?php echo $match[0]->MatchBillede; ?> " class="rounded-circle" alt="profilbilllede">
            <a href="" class="btn btn-light btn-outline-dark w-100 m-3">Ændre billede</a>
            <div class="card-body">
                <p class="card-text"><?php echo$match[0]->MatchBeskrivelse; ?> </p>

            </div>
        </div>
    </div>
</div>

<div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
               App indstillinger
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
           Tekst om app indstillinger
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Konto
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
           Tekst om konto
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Fortrolighed
            </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          tekst om fortrolighed
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                   Hjælp
                </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
             tekst om Hjælp
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFour">
                        Log ud
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <a href="index.php" class="btn btn-light btn-outline-dark w-50 m-3">log ud</a>
                </div>
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
        <a class="btn btn-outline-dark btn-floating mb-2" href="kalender.php" role="button">
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
