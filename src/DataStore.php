<?php
declare(strict_types=1);

/**
 * @author TJ Draper <tj@buzzingpixel.com>
 * @copyright 2019 BuzzingPixel, LLC
 * @license Apache-2.0
 */

namespace corbomite\requestdatastore;

class DataStore implements DataStoreInterface
{
    private $store = [];

    public function store(?array $store = null): array
    {
        return $this->store = $store !== null ? $store : $this->store;
    }

    public function storeItem(string $key, $val = null)
    {
        if ($val !== null) {
            $this->setStoreItem($key, $val);
        }

        return $this->getStoreItem($key);
    }

    private function setStoreItem(string $key, $val)
    {
        $loc = &$this->store;

        foreach (explode('.', $key) as $step) {
            $loc = &$loc[$step];
        }

        $loc = $val;
    }

    private function getStoreItem(string $key)
    {
        $val = $this->store;

        foreach (explode('.', $key) as $step) {
            if (! isset($val[$step])) {
                return null;
            }

            $val = $val[$step];
        }

        return $val;
    }
}
