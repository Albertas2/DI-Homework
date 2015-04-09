<?php
/**
 * Created by PhpStorm.
 * User: Albertas
 * Date: 2015.04.09
 * Time: 11:30
 */
namespace Acme\StoreBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Acme\StoreBundle\Order;

class ApiClienEvent extends Event
{
    protected $url;

    public function __construct(Order $url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}