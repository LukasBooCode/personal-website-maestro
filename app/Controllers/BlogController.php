<?php

namespace App\Controllers;

use Framework\Request;
use Framework\Response;
use Framework\ResponseFactory;

class BlogController
{
    private ResponseFactory $responseFactory;
    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function index(): Response
    {
        return $this->responseFactory->view('blog/index.html.twig');
    }
    public function show(Request $request): Response
    {
        $postTitle = $request->get('postTitle');
        if (!$postTitle) {
            return $this->responseFactory->notFound();
        }
        return $this->responseFactory->view('blog/' . $postTitle . '.html.twig');
    }
}
