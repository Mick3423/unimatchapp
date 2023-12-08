
<?php
require "settings/init.php";
if (!empty($_POST["data"])){

    $data = $_POST["data"];
    $file = $_FILES;



    if (!empty($file["MatchBillede"]["tmp_name"])){
        move_uploaded_file($file["MatchBillede"]["tmp_name"], "uploads/" . basename($file["MatchBillede"]["name"]) );
    }

    $sql = "INSERT INTO matchfilter (MatchNavn, MatchForhold, MatchBeskrivelse, MatchAfstand, MatchGender, MatchAlder, MatchInteresse, MatchBillede ) VALUES (:MatchNavn, :MatchForhold, :MatchBeskrivelse, :MatchAfstand, :MatchGender, :MatchAlder, :MatchInteresse, :MatchBillede )";
    $bind = [":MatchNavn" => $data["MatchNavn"], ":MatchForhold" => $data["MatchForhold"], ":MatchBeskrivelse" => $data["MatchBeskrivelse"], ":MatchAfstand" => $data["MatchAfstand"], ":MatchGender" => $data["MatchGender"], ":MatchAlder" => $data["MatchAlder"], ":MatchInteresse" => $data["MatchInteresse"], ":MatchBillede" => ($file["MatchBillede"]["tmp_name"]) ? $file["MatchBillede"]["name"] : NULL ];

    $db->sql($sql, $bind, false );

    echo "data er nu indsat. <a href='databaseinsert.php'>indsæt mere data</a>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>databaseinsertside</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">


    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/q1l342zya55m52pkg3onizzo96imblog2gl1njs1f05rp6hy/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>


<form method="post" action="databaseinsert.php" enctype="multipart/form-data">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="MatchNavn">MatchNavn</label>
                <input class="form-control" type="text" name="data[MatchNavn]" id="MatchNavn" placeholder="MatchNavn" value="">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <label for="MatchForhold">MatchForhold</label>
            <input class="form-control" type="text" name="data[MatchForhold]" id="MatchForhold" placeholder="MatchForholdtype" value="">
        </div>
        <div class="col-12 col-md-6">
            <label for="MatchGender"> MatchKøn </label>
            <input class="form-control" type="text" name="data[MatchGender]" id="MatchGender" placeholder="MatchGender" value="">
        </div>
        <div class="col-12 col-md-6">
            <label for="MatchAfstand"> MatchAfstand</label>
            <input class="form-control" type="number" step="0.1" name="data[MatchAfstand]" id="MatchAfstand" placeholder="MatchAfstand" value="">
        </div>
        <div class="col-12">
            <label for="MatchBillede"> MatchBillede</label>
            <input type="file" class="form-control" id="MatchBillede" name="MatchBillede">

        </div>
        <div class="col-12 col-md-6">
            <label for="MatchAlder">MatchAlder</label>
            <input class="form-control" type="number" step="0.1" name="data[MatchAlder]" id="MatchAlder" placeholder="MatchAlder" value="">
        </div>
        <div class="col-12 col-md-6">
            <label for="MatchInteresse">MatchInteresse </label>
            <input class="form-control" type="text"  name="data[MatchInteresse]" id="MatchInteresse" placeholder="MatchInteresse" value="">
        </div>
    </div>
    <div class="col-12 ">
        <div class="form-group">
            <label for="MatchBeskrivelse">MatchBeskrivelse</label>
            <textarea class="form-control" name="data[MatchBeskrivelse]" id="MatchBeskrivelse"></textarea>
        </div>
    </div>

    <div class="col-12 col-md-6 offset-md-6 ">
        <button class="form-control btn btn-primary text-white" type="submit" id="btnSubmit">Opret data</button>
    </div>
</form>




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    tinymce.init({
        selector:  'textarea',
    });
</script>
</body>
</html>

