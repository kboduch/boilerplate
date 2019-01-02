<?php

declare(strict_types=1);

namespace App\Behat\Context\Ui;

use App\Behat\Page\TestPage;
use App\Behat\Service\SharedStorageInterface;
use Behat\Behat\Context\Context;
use Webmozart\Assert\Assert;

class Test implements Context
{
    /** @var TestPage */
    private $testPage;

    /** @var SharedStorageInterface */
    private $sharedStorage;

    public function __construct(SharedStorageInterface $sharedStorage, TestPage $testPage)
    {
        $this->sharedStorage = $sharedStorage;
        $this->testPage = $testPage;
    }

    /**
     * @When then I use Ui context
     */
    public function thenIUseUiContext()
    {
        $this->sharedStorage->set('contextCount', $this->sharedStorage->get('contextCount') + 1);
    }

    /**
     * @When I enter page
     */
    public function iEnterPage()
    {
        $this->testPage->open();
    }

    /**
     * @Then All :numberOfContexts contexts should be marked as used
     */
    public function allContextsShouldBeMarkedAsUsed($numberOfContexts)
    {
        Assert::eq($numberOfContexts, $this->sharedStorage->get('contextCount'));
    }
}
