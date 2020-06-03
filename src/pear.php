<?php
include('Mail.php');

$recipients = 'bhavyaharia100@gmail.com';

$headers['From']    = 'bluepenassign@gmail.com';
$headers['To']      = 'joe@example.com';
$headers['Subject'] = 'Test message';

$body = 'Test message';

$params['sendmail_path'] = '/usr/lib/sendmail';

// Create the mail object using the Mail::factory method
$mail_object =& Mail::factory('sendmail', $params);

$mail_object->send($recipients, $headers, $body);
?>