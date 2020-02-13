<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class PocSymfonyController 
{
    public function poc1()
    {
        $fileJson = file_get_contents('../public/poc-1-symfony.json');
        $response = JsonResponse::fromJsonString($fileJson);
        return $response;
    }

    public function poc1bis()
    {
        $response = new Response();
        $response->setContent(json_encode([
            'test' => "poc1bis"
        ]));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function poc1bis2()
    {
        $response = new JsonResponse(['test' => "poc1bis2"]);
        return $response;
    }
}
