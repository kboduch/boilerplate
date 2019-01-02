<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class DummyController extends AbstractController
{
    /**
     * @throws \InvalidArgumentException
     */
    public function indexAction(): Response
    {
        dump('yey!');

        return $this->json([
            'This is json data and there is a dump() call before this. Use bin/console server:dump to capture it! =)',
        ]);
    }

    public function testPageAction(): Response
    {
        return new Response('');
    }
}
