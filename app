#!/usr/bin/env php
<?php
declare(strict_types=1);

/**
 * @author TJ Draper <tj@buzzingpixel.com>
 * @copyright 2019 BuzzingPixel, LLC
 * @license Apache-2.0
 */

use corbomite\di\Di;
use corbomite\requestdatastore\DataStore;

define('APP_BASE_PATH', __DIR__);
define('APP_VENDOR_PATH', APP_BASE_PATH . '/vendor');

require APP_VENDOR_PATH . '/autoload.php';

$dataStore = Di::get(DataStore::class);

var_dump($dataStore->storeItem('this.is.a.test', 'asdf'));
var_dump(Di::get(DataStore::class));
die;
