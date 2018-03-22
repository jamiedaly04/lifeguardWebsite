<?php
/**
 * Created by PhpStorm.
 * User: shane
 * Date: 3/22/18
 * Time: 4:38 PM
 */
require_once "../includes/setup_session.php";

$sarClientGet = $_SESSION["sarClient"];

$sarClient = (object)$sarClientGet;


if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $response = $sarClient->login($username, $password);

    if ($response["status"] == "OK") {
        $sessionInfo = $response["sessionInfo"];
        if (isset($_POST["remember-me"])) {
            setcookie("stored_user_id", $sessionInfo["userID"]);
            setcookie("stored_session_id", $sessionInfo["sessionID"]);
        }
        header("Location: /");
        echo "crap";
    } else {
        echo "You got something wrooooong.";
    }
    print_r($response);

}