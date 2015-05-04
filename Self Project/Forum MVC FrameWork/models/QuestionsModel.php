<?php

class QuestionsModel extends  BaseModel {
    public function getAll(){
        $statement = self::$db->query(
            "SELECT q.*,u.username FROM questions q
join users u on q.authorId=u.Id");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
    public function getOne($id){
        $statement = self::$db->query(
            "select q.questionTitle,q.numberOfViews,q.questionText,a.responderName,a.responderText,a.responderEmail,a.dateCreated ,u.username from questions q
join answers  a on q.questionId=a.questionID
join users u on q.authorId=u.Id
where q.questionId=$id");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
}