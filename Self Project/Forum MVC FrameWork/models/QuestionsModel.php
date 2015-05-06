<?php

class QuestionsModel extends  BaseModel {
    public function createQuestion($name,$text,$username){
        if ($name == ''||$text==''||$username=='') {
            return false;
        }

        $userStatement = self::$db->prepare('Select Id from users where username = ?');
        $userStatement->bind_param("s",$username);
        $userStatement->execute();

        $result=$userStatement->get_result()->fetch_assoc();
        $userId = $result['Id'];

        $otherStatement = self::$db->prepare(
            'INSERT INTO questions(questionTitle,questionText,authorId) VALUES( ?, ?, ? )');
        $otherStatement->bind_param('ssi', $name,$text,$userId);


        $otherStatement->execute();
        return $otherStatement->affected_rows > 0;
    }

    public function getAll(){
        $statement = self::$db->query(
            "SELECT q.*,u.username FROM questions q
            join users u on q.authorId=u.Id");

        return $statement->fetch_all(MYSQLI_ASSOC);
    }
    public function getAllByAuthor($author){
        $statement = self::$db->prepare(
            "SELECT q.*,u.username FROM questions q
            join users u on q.authorId=u.Id
             where u.username = ? ");
        $statement->bind_param('s',$author);
        $statement->execute();

        $result=$statement->get_result()->fetch_assoc();
            return $result;
    }

    public function getOne($id){
        $upViewstatement = self::$db->prepare('UPDATE questions
       SET  numberOfViews=numberOfViews +1
        where questionID=?');
        $upViewstatement->bind_param("i",$id);
        $upViewstatement->execute();


        $statement = self::$db->prepare(
            "select q.questionId,q.questionTitle,q.numberOfViews,q.questionText,q.dateCreated as 'questionDate' ,
            a.responderName,a.responderText,a.responderEmail,a.dateCreated as answerDate ,u.username
            from questions q
            join answers  a on q.questionId=a.questionID
            join users u on q.authorId=u.Id
            where q.questionId=?
            ");
        $statement->bind_param('i',$id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();

        if($result==null){
            $NewStatement = self::$db->prepare(
                "select q.questionId,q.questionTitle,q.numberOfViews,q.questionText,q.dateCreated as 'questionDate' ,
            u.username,u.FullName
            from questions q
            join users u on q.authorId=u.Id
            where q.questionId=?
            ");
            $NewStatement->bind_param('i',$id);
            $NewStatement->execute();
            $result = $NewStatement->get_result()->fetch_assoc();
        }


        return $result;
    }

}