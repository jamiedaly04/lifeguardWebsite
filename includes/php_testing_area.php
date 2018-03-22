<?php
/**
 * Created by PhpStorm.
 * User: shane
 * Date: 3/22/18
 * Time: 2:04 PM
 */

include_once 'SarClient.php';

$client = new SarClient("http://localhost:8080");

//$output = $client->login("fuck", "fuck");
$output = $client->register("fuck@fuck.com", "password1", "damn", "fuck", 12, "MALE");

print_r($output);