<?php

$appSecret = 'YOUR-SECRET-KEY-HERE';

// OR you can use environment variables
$appSecret = getenv('KINOW_WEBHOOK_SECRET');

$webhookSignature = getallheaders()["X-Kinow-Signature"];

$body = file_get_contents('php://input');

$expectedSignature = hash_hmac('sha256', $body, $appSecret, false);

if ($webhookSignature == $expectedSignature) {

    $payload = json_decode($body, true);

    // Retrieve these data
    $eventId = $payload['event_id'];
    $subject = $payload['subject'];
    $data = $payload['data'];

    // Do something here...

    header("Status: 200 OK");
} else {
    header("Status: 401 Not authenticated");
}
?>
