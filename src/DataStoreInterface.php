<?php
declare(strict_types=1);

/**
 * @author TJ Draper <tj@buzzingpixel.com>
 * @copyright 2019 BuzzingPixel, LLC
 * @license Apache-2.0
 */

namespace corbomite\requestdatastore;

interface DataStoreInterface
{
    /**
     * Returns the value of store, sets store if there is incoming array value
     * @param array|null $store
     * @return array|null
     */
    public function store(?array $store = null): array;

    /**
     * Gets from the store array by key. Sets an item by key on the store array
     * if $val is supplied
     * @param string $key
     * @param mixed $val
     */
    public function storeItem(string $key, $val = null);
}
