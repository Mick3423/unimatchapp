<?php

require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);

/*
 * password: skal udfyldes og være Unimatch
 * alderSearch: Valgfri
 * forholdSearch
 *
 */

header('Content-Type: application/json;');


$data["password"] = "Unimatch";

if (isset($data["password"]) && $data["password"] == "Unimatch"){
    $sql = "SELECT * FROM matchfilter WHERE 1=1";
    $bind = [];

    if (!empty($data["afstandSearch"])) {
        $sql .= " AND MatchAfstand LIKE CONCAT('%', :MatchAfstand, '%')";
        $bind[":MatchAfstand"] = $data["afstandSearch"] ;
    }


    if (!empty($data["forholdSearch"])) {
        $sql .= " AND MatchForhold LIKE CONCAT('%', :MatchForhold, '%')";
        $bind[":MatchForhold"] = $data["forholdSearch"] ;
    }

    if (!empty($data["alderSearch"])) {
        $sql .= " AND MatchAlder  LIKE CONCAT('%', :MatchAlder, '%')";
        $bind[":MatchAlder"] = $data["alderSearch"] ;
    }

    $sql .= " ORDER BY MatchAlder ASC";




    $Match = $db->sql($sql, $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode($Match);

} else {

    header("HTTP/1.1 401 unauthorized");
    $error["errorMessage"] = "kodeord var forkert" ;

    echo json_encode($error);
}
?>

