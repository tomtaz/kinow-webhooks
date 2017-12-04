<?php

$app_secret = 'YOUR-SECRET-KEY-HERE';

$webhook_signature = getallheaders()["X-Kinow-Signature"];

$body = file_get_contents('php://input');

$expected_signature = hash_hmac('sha256', $body, $app_secret, false);

if ($webhook_signature == $expected_signature) {

    $payload = json_decode($body, true);

    // Retrieve these data
    $enventId = $payload['event_id'];
    $subject = $payload['subject'];
    $data = $payload['data'];

    // Do something here...

    header("Status: 200 OK");
} else {
    header("Status: 401 Not authenticated");
}
?>
