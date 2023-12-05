<?php

namespace misa\productfinder;

use Misa\ProductFinder\Cache\FileCache;
use Misa\ProductFinder\Controller\ProductController;
use Misa\ProductFinder\DB\MysqlDriver;
use Misa\ProductFinder\Elastic\ElasticDriver;
use Misa\ProductFinder\Elastic\ElasticSearchFinder;
use Misa\ProductFinder\Finders\MySQLFinder;
use Misa\ProductFinder\Reader\Reader;
use Misa\ProductFinder\StatisticsStorage\PlainTextStatisticsStorage;

require __DIR__ . '/vendor/autoload.php';

$config = [
    'readFromElastic' => true
];

$cache = new FileCache(__DIR__."/cache");
$adapter = $config['readFromElastic'] ? new ElasticSearchFinder(new ElasticDriver()) : new MySQLFinder(new MysqlDriver());
$reader = new Reader($cache, $adapter);
$controller = new ProductController($reader, new PlainTextStatisticsStorage());
$detailedData = $controller->getDetail("ryzen75700x");
print_r($detailedData);