<?php

namespace App\Z\HttpKernel;

use Symfony\Component\HttpFoundation\Response;

    

        Interface HttpKernelInterface
        {
            

            public function handleRequest() : Response; 
        }
