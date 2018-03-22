<?php
set_include_path(get_include_path() . PATH_SEPARATOR . "/var/www/html/includes/");

include "SarClient.php";
session_start();

$_SESSION["sarClient"] = new SarClient("http://sar-master.valaria.pw:8080");

$sarClient = $_SESSION["sarClient"];



// Attempt to resume session
if (isset($_COOKIE["stored_session_id"]) && isset($_COOKIE["stored_user_id"])) {

    $cookie_user_id = $_COOKIE["stored_user_id"];
    $cookie_session_id = $_COOKIE["stored_session_id"];
    $response = $sarClient->check_session($cookie_session_id, $cookie_user_id);

    if ($response["status"] === "OK") {
        $sarClient->set_auth($response["sessionInfo"]);
    } else {
        unset($_COOKIE["stored_user_id"]);
        unset($_COOKIE["stored_session_id"]);
    }

}

