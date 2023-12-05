<?php
namespace Misa\ProductFinder\DB;

interface IMySQLDriver {
    /**
     * @param string $id
     * @return array
     */
    public function findProduct($id);
}