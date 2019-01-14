<?php
declare(strict_types=1);

/**
 * @author TJ Draper <tj@buzzingpixel.com>
 * @copyright 2019 BuzzingPixel, LLC
 * @license Apache-2.0
 */

use corbomite\di\Di;
use corbomite\requestdatastore\DataStore;
use corbomite\requestdatastore\DataStoreTwigExtension;

return [
    DataStore::class => function () {
        return new DataStore();
    },
    DataStoreTwigExtension::class => function () {
        return new DataStoreTwigExtension(Di::get(DataStore::class));
    },
];
