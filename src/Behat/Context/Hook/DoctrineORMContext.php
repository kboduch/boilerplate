<?php

declare(strict_types=1);

namespace App\Behat\Context\Hook;

use App\Behat\Service\SharedStorageInterface;
use Behat\Behat\Context\Context;

//use Doctrine\Common\DataFixtures\Purger\ORMPurger;
//use Doctrine\ORM\EntityManagerInterface;

final class DoctrineORMContext implements Context
{
//    /** @var EntityManagerInterface */
//    private $entityManager;

//    public function __construct(EntityManagerInterface $entityManager)
//    {
//        $this->entityManager = $entityManager;
//    }

    /** @var SharedStorageInterface */
    private $sharedStorage;

    public function __construct(SharedStorageInterface $sharedStorage)
    {
        $this->sharedStorage = $sharedStorage;
    }

    /**
     * @BeforeScenario
     */
    public function purgeDatabase()
    {
        $this->sharedStorage->set('contextCount', $this->sharedStorage->get('contextCount') + 1);
    }

//    /**
//     * @BeforeScenario
//     */
//    public function purgeDatabase()
//    {
//        $this->entityManager->getConnection()->getConfiguration()->setSQLLogger(null);
//        $purger = new ORMPurger($this->entityManager);
//        $purger->purge();
//        $this->entityManager->clear();
//    }
}
