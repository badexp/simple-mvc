<?php

namespace Lib\Contract;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

interface RouterInterface
{
    public function handle(Request $request) : Response;
}