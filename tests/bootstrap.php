<?php
/**
 * Bootstrap the tests
 *
 * PHP version 5.5
 *
 * @category   interview
 * @version    1.0.0
 */
namespace interview;
date_default_timezone_set('Europe/London');
/**
 * Load PHPUnit
 */
require_once __DIR__ . '/../vendor/autoload.php';
/**
 * Setup data directory
 */
define('TEST_DATA_DIR', __DIR__ . '/app');