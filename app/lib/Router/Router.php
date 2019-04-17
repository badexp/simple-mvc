<?php

namespace Lib\Router;

use Lib\Contract\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Router implements RouterInterface
{

    public function handle(Request $request): Response
    {
        // TODO: Implement handle() method.
        return new Response('router handled '.$request->getPathInfo());
    }
}