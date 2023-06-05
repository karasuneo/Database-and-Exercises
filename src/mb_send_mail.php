<?php
$to = "your-email@example.com";
$subject = "test subject";
$message = "test message";
$add_header = "From: your-email@example.com";

if (mb_send_mail($to, $subject, $message, $add_header)) {
    print "Mail send";
} else {
    print "Mail send failed";
}
