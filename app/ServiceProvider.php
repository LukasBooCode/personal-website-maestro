<?php

namespace App;

use App\Controllers\BlogController;
use App\Controllers\HomeController;
use App\Repositories\BlogRepository;
use App\Repositories\BlogRepositoryInterface;
use Exception;
use Framework\Database;
use Framework\ResponseFactory;
use Framework\ServiceContainer;
use Framework\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @throws Exception
     */
    public function register(ServiceContainer $container): void
    {
        $responseFactory = $container->get(ResponseFactory::class);

        $database = $container->get(Database::class);

        $blogRepository = new BlogRepository($database);
        $container->set(BlogRepositoryInterface::class, $blogRepository);

        $homeController = new HomeController($responseFactory);
        $container->set(HomeController::class, $homeController);

        $blogController = new BlogController($responseFactory, $blogRepository);
        $container->set(BlogController::class, $blogController);
    }
}
