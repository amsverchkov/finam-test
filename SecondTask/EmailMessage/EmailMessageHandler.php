<?php

namespace EmailMessage;

use IMessageHandler;

class EmailMessageHandler implements IMessageHandler
{
    public function send(\BaseMessage $emailMessage): void
    {
        // Логика отправки для $smsMessage
        echo 'Send with email';
    }
}