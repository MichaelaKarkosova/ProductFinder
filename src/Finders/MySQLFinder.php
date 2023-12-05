<?php

namespace Misa\ProductFinder\Finders;
use Misa\ProductFinder\DB\IMySQLDriver;

class MySQLFinder implements ProductAdapterInterface{
    private IMySQLDriver $driver;

    public function __construct($driver){
        $this->driver = $driver;
    }

    public function findProduct($id) {
        return $this->driver->findProduct($id);
    }
}