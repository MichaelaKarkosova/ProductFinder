<?php
namespace Misa\ProductFinder\Elastic;

interface IElasticSearchDriver {
    /**
     * @param string $id
     * @return array
     */
    public function findProduct($id);
}