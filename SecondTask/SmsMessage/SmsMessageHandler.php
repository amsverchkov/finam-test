<?php

namespace SmsMessage;

use IMessageHandler;

class SmsMessageHandler implements IMessageHandler
{
    public function send(\BaseMessage $smsMessage): void
    {
        // Логика отправки для $smsMessage
        echo 'Send with sms';
    }
}