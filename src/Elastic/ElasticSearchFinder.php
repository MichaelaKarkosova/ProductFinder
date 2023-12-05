<?php

namespace Misa\ProductFinder\Elastic;
use Misa\ProductFinder\Finders\ProductAdapterInterface;

class ElasticSearchFinder implements ProductAdapterInterface {
    private IElasticSearchDriver $driver;

    public function __construct($driver){
        $this->driver = $driver;
    }

    public function findProduct($id) {
        return $this->driver->findProduct($id);
    }
}