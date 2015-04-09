<?php

namespace Acme\DemoBundle\Controller;

use Acme\StoreBundle\Event\ApiClienEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcher;

class ApiClienController extends Controller
{

    public function indexAction()
    {
        $dispatcher = new ApiClienEvent('https://www.google.lt/');
        $listener = new ApiListener();
        $dispatcher->addListener('api.client.success', array($listener, 'onSuccess'));
        $dispatcher->addListener('api.client.failure', array($listener, 'onFailure'));
        $dispatcher->addListener('api.client.previous', array($listener, 'onPrevious'));
    }
}
