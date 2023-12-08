

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>profilliste </title>

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

<nav class="navbar navbar-expand-lg bg-primary text-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="profilListe.php">liste</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="profilside.php">profilside</a>
                </li>


            </ul>

        </div>
    </div>
</nav>


<div class="container">

    <div class="Profilliste">
        <div class="filter p-5">
            <div class="row">
                <div class="col-md-4 ">
                    <input type="search" class="form-control afstandSearch" placeholder="søg og find en afstand">
                </div>
                <div class="col-md-4 ">
                    <input type="search" class="form-control forholdSearch" placeholder="søg og find en forholdstype">
                </div>
                <div class="col-md-4 ">
                    <input type="search" class="form-control alderSearch" placeholder="søg og find en alder">
                </div>
            </div>
        </div>
        <div class="items">

        </div>

    </div>
</div>


<footer>
    <div class="container-fluid text-dark text-center bg-primary h-100">


        <a class="btn btn-outline-dark btn-floating mb-2" href="" role="button">
            <i class="fa-solid fa-house"></i>
        </a>

        <a class="btn btn-outline-dark btn-floating mb-2" href="#" role="button">
            <i class="fa-solid fa-heart"></i>
        </a>
        <a class="btn btn-outline-dark btn-floating mb-2" href="#" role="button">
            <i class="fa-solid fa-calendar-days"></i>
        </a>
        <a class="btn btn-outline-dark btn-floating mb-2" href="#" role="button">
            <i class="fa-solid fa-comments"></i>
        </a>
        <a class="btn btn-outline-dark btn-floating mb-2" href="#" role="button">
            <i class="fa-solid fa-user"></i>
        </a>


    </div>
</footer>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module">
    import Profil from "./js/profil.js";
    const profil = new Profil()
    profil.init()
</script>
</body>
</html>

