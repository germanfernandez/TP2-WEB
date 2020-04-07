<?
namespace App\core;

class Router
{
    public $routes = [];


    function define($routes){
        $this->routes = $routes;
    }


    function direct($request) {
        $operation = $this->routes["{$request->method} {$request->path}"];

    }
}

?>