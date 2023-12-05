<?php

namespace Misa\ProductFinder\Reader;
use Misa\ProductFinder\Cache\CacheInterface;
use Misa\ProductFinder\Finders\ProductAdapterInterface;

class Reader implements ProductAdapterInterface {
    public ProductAdapterInterface $adapter;
    public CacheInterface $cache;

    public function __construct(CacheInterface $cache, ProductAdapterInterface $adapter) {
        $this->adapter = $adapter;
        $this->cache = $cache;
    }

    public function findProduct($id) {
        $cachedData = $this->cache->get($id);
        if ($cachedData) {
            echo "Data from cache";
            return $cachedData;
        }
        $productData = $this->adapter->findProduct($id);
        $this->cache->save($id, $productData);
        echo "Uncached data";
        return $productData;
    }

}