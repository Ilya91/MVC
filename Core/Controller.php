<?php

namespace Core;


abstract class Controller
{
    /**
     * Base controller
     */

    protected $route_params = [];

    public function __construct($route_params)
    {
        $this->route_params = $route_params;
    }
}