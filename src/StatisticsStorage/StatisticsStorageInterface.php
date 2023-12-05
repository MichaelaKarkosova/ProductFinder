<?php

namespace Misa\ProductFinder\StatisticsStorage;

interface StatisticsStorageInterface{
    public function store(string $id): void;
}