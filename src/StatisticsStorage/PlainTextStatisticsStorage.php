<?php

namespace Misa\ProductFinder\StatisticsStorage;

class PlainTextStatisticsStorage implements StatisticsStorageInterface{

    public function store(string $id): void {
        $folder = __DIR__."/../../storage/counter.json";
        $jsondata = file_get_contents($folder);
        $decoded = json_decode($jsondata, true);
        $currentCounter = $decoded[$id] ?? 0;
        $decoded[$id] = $currentCounter+1;
        file_put_contents($folder, json_encode($decoded));
    }
}