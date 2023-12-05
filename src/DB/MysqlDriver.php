<?php

namespace Misa\ProductFinder\DB;

use SQLite3;

class MysqlDriver implements IMySQLDriver {
    public function findProduct($id)
    {
        $db = new SQLite3(__DIR__ . '/../../storage/db.db');
        $stmt = $db->prepare('SELECT id, name, description, type from products where id = :id');
        $stmt->bindValue(":id", $id);
        $results = $stmt->execute();
        $res = $results->fetchArray(SQLITE3_ASSOC);
        $data['id'] = utf8_encode($res["id"]);
        $data['name'] = utf8_encode($res["name"]);
        $data['description'] = utf8_encode($res["description"]);
        $data['type'] = utf8_encode($res["type"]);
        return $data;
    }
}