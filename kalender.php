
<?php
require "settings/init.php";
$match = $db->sql("SELECT * FROM matchfilter WHERE MatchId = 1");
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Kalender</title>

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

<div class="container col-12 col-sm-12 justify-content-center align-items-center">

    <div class="card col-12 col-md-6 col-lg-4 mt-3">

        <div class="card-body">
            <h5 class="card-title text-uppercase">Video Speed Dating</h5>
            <p class="card-text">yr op for romantikken: Oplev kærlighedens eller
                venskabets tempo med Video Speed Dating!</p>
            <p class="card-text">Sådan fungerer det:
                Tag del i korte, sjove videoopkald med spændende
                mennesker. Hver samtale er som en lille oplevelsesrig
                ekskursion, der varer kun et par minutter, men kan
                ændre dit liv for altid.</p>
            <p class="card-text">Hvorfor Video Speed Dating?
                Effektivt: Mød flere potentielle partnere på én aften.
                Ægte forbindelser: Se og hør din match med det samme,
                tingen overraskelser.
                Sjov og uformel: Mindre stress, mere sjov!</p>
            <p class="card-text">Hvem ved, måske finder du din hjertets udkårne, eller
                din nye bedste ven i et lynhurtigt videoopkald?

                Kom og oplev, hvor hurtigt kærligheden eller venskabet
                kan slå til!

                Er du klar til at accelerere din datingoplevelse?
                Tilmeld dig nu og lad os skabe magi sammen</p>
            <p class="card-text">Varighed 3 min</p>
            <a href="" class=" btn btn-light btn-outline-dark">Tilmeld Mig</a>

        </div>
    </div>

    <div class="card col-12 col-md-6 col-lg-4 mt-3">

        <div class="card-body">
            <h5 class="card-title text-uppercase">Dobbeltdating</h5>
            <p class="card-text">Oplev den dobbelte sjov: Dobbeltdating med en twist!

                Har du nogensinde tænkt på at tage datingoplevelsen
                til det næste niveau? Med dobbeltdating kombinerer
                vi det bedste fra begge verdener: socialt samvær og
                romantiske øjeblikke!</p>
            <p class="card-text">Hvordan fungerer det?
                To par mødes, skaber forbindelser og deler en sjov
                oplevelse sammen. Det er en fantastisk måde at møde
                nye mennesker på, samtidig med at du har din partner
                ved din side.</p>
            <p class="card-text">Hvad kan du forvente?
                Uanset om det er en lækker middag, en spændende
                aktivitet eller bare en hyggelig sammenkomst, tilbyder
                dobbeltdating en unik mulighed for at fordybe dig i nye
                relationer og skabe minder sammen.</p>
            <p class="card-text">Fordele ved dobbeltdating:
                Mulighed for at opbygge venskaber med andre par.
                Oplevelser, der styrker både romantiske og
                venskabelige bånd.
                Er du klar til at udforske dobbeltdatingens verden?</p>

            <a href="" class="btn btn-light btn-outline-dark">Tilmeld Mig</a>

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

