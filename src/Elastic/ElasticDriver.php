<?php

namespace Misa\ProductFinder\Elastic;

class ElasticDriver implements IElasticSearchDriver {
  public function findProduct($id) {
      $data =
          ["rtx4070ROG" =>
          ["id" =>"rtx4070ROG", "name" => "Asus Rog Strix RTX 4070", "description" => "High-End Graphics card", "type" => "GPU"],
          "office2020" =>  ["id" =>"office2020", "name" => "Office 2020 Pack", "description" => "Office 2020", "type" => "software"],
          "ryzen75700x" => ["id" =>"ryzen75700x", "name" => "AMD Ryzen 7 5700X", "description" => "Powerfull processor", "type" => "CPU"],
      ];
      return $data[$id];
  }
}