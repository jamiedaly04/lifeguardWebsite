<?php
/**
 * Created by PhpStorm.
 * User: shane
 * Date: 3/22/18
 * Time: 10:03 AM
 */


class SarClient
{
    private $client_user_id;
    private $client_session_id;
    private $client_admin_level = 0;

    private $client_url;

    public function __construct($url)
    {
        $this->client_url = $url;
    }


    public function login($username, $password)
    {
        $loginRequest = array();
        $loginRequest["emailAddress"] = $username;
        $loginRequest["password"] = $password;

        $response = $this->call_api($loginRequest, "/user/login");

        if ($response["status"] === "OK") {
            $sessionInfo = $response["sessionInfo"];

            $this->client_session_id = $sessionInfo["sessionID"];
            $this->client_user_id = $sessionInfo["userID"];
            $this->client_admin_level = $sessionInfo["adminLevel"];
        }


        return $response;
    }

    public function register($email, $password, $first_name, $last_name, $dob, $sex)
    {
        $registerRequest = array();
        $registerRequest["emailAddress"] = $email;
        $registerRequest["password"] = $password;
        $registerRequest["firstName"] = $first_name;
        $registerRequest["lastName"] = $last_name;
        $registerRequest["dob"] = $dob;
        $registerRequest["sex"] = $sex;

        $response = $this->call_api($registerRequest, "/user/register");

        if ($response["status"] === "OK") {
            $sessionInfo = $response["sessionInfo"];

            $this->client_session_id = $sessionInfo["sessionID"];
            $this->client_user_id = $sessionInfo["userID"];
            $this->client_admin_level = $sessionInfo["adminLevel"];
        }


        return $response;
    }

    public function check_session($session_id, $user_id)
    {
        $sessionCheck = array();
        $sessionInfo = array();

        $sessionInfo["sessionID"] = $session_id;
        $sessionInfo["userID"] = $user_id;

        $sessionCheck["sessionInfo"] = $sessionInfo;

        $response = $this->call_api($sessionCheck, "/user/checkSession");

        if ($response["status"] === "OK") {
            $sessionInfo = $response["sessionInfo"];

            $this->client_session_id = $sessionInfo["sessionID"];
            $this->client_user_id = $sessionInfo["userID"];
            $this->client_admin_level = $sessionInfo["adminLevel"];
        }

        return $response;

    }


    private function call_api($json_array, $target)
    {
        $curl = curl_init($this->client_url . $target);

        $toSend = json_encode($json_array);

        $headers = array(
            "Content-Type: application/json;charset=\"utf-8\"",
            "Accept: application/json"
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $toSend);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $responseJson = curl_exec($curl);


        if (curl_errno($curl)) {
            $response = array();
            $response["status"] = "INTERNAL_ERROR";
            $response["message"] = "An unknown error has occurred";

            curl_close($curl);

            return $response;
        } else {
            curl_close($curl);
            return json_decode($responseJson, true);
        }

    }

    public function set_auth($sessionInfo)
    {
        $this->client_session_id = $sessionInfo["sessionID"];
        $this->client_user_id = $sessionInfo["userID"];
        $this->client_admin_level = $sessionInfo["adminLevel"];
    }

    public function isAuthed()
    {
        $response = $this->check_session($this->client_session_id, $this->client_user_id);

        if ($response["status"] == "OK") {
            return $response["sessionInfo"];
        }

        return null;
    }

    public function logout()
    {
        if (isset($_COOKIE["stored_session_id"])) {
            unset($_COOKIE["stored_session_id"]);
            setcookie("stored_session_id", null, -1);
        }
        if (isset($_COOKIE["stored_user_id"])) {
            unset($_COOKIE["stored_user_id"]);
            setcookie("stored_user_id", null, -1);
        }
        session_destroy();

    }

    /**
     * @return int
     */
    public function getClientAdminLevel(): int
    {
        return $this->client_admin_level;
    }

    /**
     * @return mixed
     */
    public function getClientUserId()
    {
        return $this->client_user_id;
    }

    /**
     * @return mixed
     */
    public function getClientSessionId()
    {
        return $this->client_session_id;
    }

}