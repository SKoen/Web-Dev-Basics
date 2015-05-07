<?php
/**
 * Created by PhpStorm.
 * User: S.KoeH
 * Date: 07-05-15
 * Time: 10:07 AM
 */

class CategoriesModel extends BaseModel {
    public function getAll(){
        $statement = self::$db->query(
            "SELECT * FROM categories
              ORDER BY Id");
        $result=$statement->fetch_all();
        return $result;
    }
}