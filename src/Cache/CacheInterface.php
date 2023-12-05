<?php
namespace Misa\ProductFinder\Cache;

interface CacheInterface{
    public function get(string $id): ?array;
    public function save(string $id, array $data): void;
}