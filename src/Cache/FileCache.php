<?php

namespace Misa\ProductFinder\Cache;

class FileCache implements CacheInterface{
    private string $directory;

    public function __construct(string $directory) {
        $this->directory = realpath($directory);
    }

    public function get(string $id): ?array {
        $file = $this->directory . DIRECTORY_SEPARATOR . rawurldecode($id);
        if (!file_exists($file)) {
            return null;
        }

        $contents = @file_get_contents($file);

        if ($contents) {
            $contents = unserialize($contents);
        }
        return is_array($contents) ? $contents : null;
    }

    public function save(string $id, array $data): void {
        $file = $this->directory . DIRECTORY_SEPARATOR . rawurldecode($id);
        file_put_contents($file, serialize($data));
    }
}