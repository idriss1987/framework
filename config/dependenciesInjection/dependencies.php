<?php

use App\Controller\CountryController;
use App\Z\Routing\Router;
use App\Z\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;

    return [

        Request::class => Request::createFromGlobals(),

        'controllers' => [
            "CountryController" =>CountryController::class
        ],

        RouterInterface::class => DI\create(Router::class)
        ->constructor(DI\get(Request::class), DI\get('controllers'))
        ,

    ];
