<?php
    require_once "../vendor/autoload.php";

    use \Symfony\Component\HttpFoundation\Request;
    use \Lib\Router\Router;

    $request = Request::createFromGlobals();

    $router = new Router();

    $response = $router->handle($request);

    $response->send();
    