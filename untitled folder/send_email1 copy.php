<?php
$recipient = "prashanth@anibyte.net";
$subject   = "This is a test e-mail";
$message   = "Hi!

This is a test message (e-mail body).
This is a new line

Enough for now.
Best regards,

Test test
";

mail($recipient, $subject, $message);
?>