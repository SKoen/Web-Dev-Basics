<?php

class QuestionsModel extends  BaseModel {
    public function getAll(){
        $statement = self::$db->query(
            "SELECT * FROM questions");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
}