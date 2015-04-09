<?php
use Symfony\Component\EventDispatcher\Event;
class ApiListener
{


    public function onSuccess(Event $event)
    {
        echo "Success";
    }
    public function onFailure(Event $event)
    {
        echo "Failure";

    }
    public function onPrevious(Event $event)
    {

    }
}