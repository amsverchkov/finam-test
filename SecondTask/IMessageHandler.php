<?php


interface IMessageHandler
{
    public function send(BaseMessage $baseMessage);
}