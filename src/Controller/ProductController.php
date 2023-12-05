<?php

namespace Misa\ProductFinder\Controller;
use Misa\ProductFinder\Finders\ProductAdapterInterface;
use Misa\ProductFinder\StatisticsStorage\StatisticsStorageInterface;

class ProductController {
    public ProductAdapterInterface $interface;
    public StatisticsStorageInterface $stats;

    public function __construct(ProductAdapterInterface $interface, StatisticsStorageInterface $stats) {
        $this->interface = $interface;
        $this->stats = $stats;
    }

    /**
     * @param string $id
     * @return false|string
     */
    public function getDetail($id) {
        $info = $this->interface->findProduct($id);
        $this->stats->store($id);
        return json_encode($info);
    }
}