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
}