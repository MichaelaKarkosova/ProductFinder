<?php
namespace Misa\ProductFinder\Finders;

interface ProductAdapterInterface {
    /**
     * @param string $id
     * @return array
     */
    public function findProduct($id);
}