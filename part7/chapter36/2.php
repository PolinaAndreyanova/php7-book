<?php
$email_correct = "igorsimdyanov@gmail.com";
$email_wrong = "igorsimdyanov@//gmail.com";

echo "correct = " . filter_var($email_correct, FILTER_SANITIZE_EMAIL) . "<br>";
echo "wrong = " . filter_var($email_wrong, FILTER_SANITIZE_EMAIL) . "<br>";