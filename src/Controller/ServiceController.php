<?php

// src/Controller/AppController.php
namespace App\Controller;

use App\Service\AppService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AppController
{
    private $appService;

    public function __construct(AppService $appService)
    {
        $this->appService = $appService;
    }

    public function createArticle(Request $request)
    {
        $response = $this->appService->createArticle($request);

        return new Response($response, Response::HTTP_OK);
    }

    public function showArticle(Request $request, $articleId)
    {
        $response = $this->appService->getArticleById($request, $articleId);

        return new Response($response, Response::HTTP_OK);
    }

    // Ajoutez d'autres actions en fonction de vos besoins...
}
