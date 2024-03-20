<?php
$messageHandler = new EmailMessage\EmailMessageHandler();
$message = new EmailMessage\EmailMessage();
$message->message = 'test';
$message->recipients = [2, 5, 7, 9];
$messageHandler->send($message);
