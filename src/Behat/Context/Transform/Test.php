<?php

declare(strict_types=1);

namespace App\Behat\Context\Transform;

use App\Behat\Service\SharedStorageInterface;
use Behat\Behat\Context\Context;

class Test implements Context
{
    /** @var SharedStorageInterface */
    private $sharedStorage;

    public function __construct(SharedStorageInterface $sharedStorage)
    {
        $this->sharedStorage = $sharedStorage;
    }

    /**
     * @When I use Transform context
     */
    public function iUseTransformContext()
    {
        $this->sharedStorage->set('contextCount', $this->sharedStorage->get('contextCount') + 1);
    }
}
