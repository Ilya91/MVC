<?php

class Router
{
    /**
     * @var
     */
    protected $routes;

    /**
     * @param $route
     * @param $params
     * @return void
     */
    public function add($route, $params){
        $this->routes[$route] = $params;
    }

    public function getRoutes(){
        return $this->routes;
    }
}