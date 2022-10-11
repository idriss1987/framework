<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ErrorController
{
    public function notFound() : Response
    {
        $response = new Response(
            'page non trouvée',
            Response::HTTP_NOT_FOUND,
            ['content-type' => 'text/html']
        );

        return $response;
        
    }

}