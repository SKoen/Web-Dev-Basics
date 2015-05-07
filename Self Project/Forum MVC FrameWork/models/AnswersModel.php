<?php

class AnswersModel extends BaseModel{
    public function createAnswer($responderName,$responderEmail,$responderText,$questionId){
        if ($responderName == ''||$responderText=='') {
            return false;
        }
        $statement = self::$db->prepare(
            "INSERT INTO answers VALUES(NULL, ?, ?, ?,DEFAULT ,?)");
        $statement->bind_param('sssi', $responderText,$responderName,$responderEmail,$questionId);


        $statement->execute();
        return $statement->affected_rows > 0;
    }

    public function getAllByQuestionId($questionId){
        $statement = self::$db->query(
            "SELECT * FROM answers
              WHERE questionId = ".$questionId." ORDER BY dateCreated");
        $result=$statement->fetch_all();
        return $result;
    }
}