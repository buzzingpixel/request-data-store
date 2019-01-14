<?php
declare(strict_types=1);

/**
 * @author TJ Draper <tj@buzzingpixel.com>
 * @copyright 2019 BuzzingPixel, LLC
 * @license Apache-2.0
 */

use corbomite\requestdatastore\DataStore;

return [
    DataStore::class => function () {
        return new DataStore();
    },
];
