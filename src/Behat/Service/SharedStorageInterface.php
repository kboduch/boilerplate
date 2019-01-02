<?php

declare(strict_types=1);

namespace App\Behat\Service;

interface SharedStorageInterface
{
    /**
     * @param string $key
     */
    public function get($key);

    /**
     * @param string $key
     *
     * @return bool
     */
    public function has($key);

    /**
     * @param string $key
     */
    public function set($key, $resource);

    public function getLatestResource();

    /**
     * @throws \RuntimeException
     */
    public function setClipboard(array $clipboard);
}
