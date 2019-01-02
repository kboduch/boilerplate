<?php

declare(strict_types=1);

namespace App\Behat\Context\Setup;

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
     * @Given I just triggered Setup context
     */
    public function iJustTriggeredSetupContext()
    {
        $this->sharedStorage->set('contextCount', $this->sharedStorage->get('contextCount') + 1);
    }
}
