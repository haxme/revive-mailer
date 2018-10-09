<?php

require('config.php');
header('Content-type: application/json');

function obfuscateRecipients($recipients) {
    $obfRecipients = array();

    foreach($recipients->contacts as &$contact) {
        $split = explode('@', $contact);
        $occ = floor(strlen($split[0]) / 2) + 1;

        array_push($obfRecipients, array(
            "address" => str_repeat('*', $occ) . substr($split[0], $occ + 1) . '@' . $split[1],
            "id" => hash('sha256', $contact),
            "isSelected" => true
        ));
    }

    return json_encode(array('contacts' => $obfRecipients));
}

if (file_exists(RECIPIENT_SET_JSON_FILE)) {
    $recipients = json_decode(file_get_contents(RECIPIENT_SET_JSON_FILE));

    echo obfuscateRecipients($recipients);
}
else if (!empty(RECIPIENT_SET)) {
    echo obfuscateRecipients(json_decode(json_encode(array('contacts' => RECIPIENT_SET))));
}
else {
    echo json_encode(array('contacts' => []));
}