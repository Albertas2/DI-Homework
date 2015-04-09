<?php
/**
 * Created by PhpStorm.
 * User: Albertas
 * Date: 2015.04.09
 * Time: 11:14
 */

namespace Acme\DemoBundle;


class ApiClient {
    private $url;

    function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }


} 