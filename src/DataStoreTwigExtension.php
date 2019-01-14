<?php
declare(strict_types=1);

/**
 * @author TJ Draper <tj@buzzingpixel.com>
 * @copyright 2018 BuzzingPixel, LLC
 * @license Apache-2.0
 */

namespace corbomite\requestdatastore;

use Twig_Function;
use Twig_Extension;

class DataStoreTwigExtension extends Twig_Extension
{
    private $dataStore;

    public function __construct(DataStoreInterface $dataStore)
    {
        $this->dataStore = $dataStore;
    }

    public function getFunctions(): array
    {
        return [new Twig_Function('dataStore', [$this, 'dataStore'])];
    }

    public function dataStore(): DataStoreInterface
    {
        return $this->dataStore;
    }
}
