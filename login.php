<?php

require('config.php');
$request = json_decode(file_get_contents("php://input"));

if ($request->authCode == AUTH_CODE) {
    echo json_encode(array('isAuthorized' => true));
}
else {
    echo json_encode(array('isAuthorized' => false));
}