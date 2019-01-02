<?php

declare(strict_types=1);

namespace App\Behat\Page;

use FriendsOfBehat\PageObjectExtension\Page\SymfonyPage;

class TestPage extends SymfonyPage
{
    public function getRouteName(): string
    {
        return 'test_page';
    }
}
