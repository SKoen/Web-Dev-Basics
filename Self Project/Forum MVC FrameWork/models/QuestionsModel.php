<?php

class QuestionsModel extends  BaseModel {
    public function createQuestion($name,$text,$username,$categoryId){
        if ($name == ''||$text==''||$username==''||$categoryId=='') {
            return false;
        }

        $userStatement = self::$db->prepare('Select Id from users where username = ?');
        $userStatement->bind_param("s",$username);
        $userStatement->execute();

        $result=$userStatement->get_result()->fetch_assoc();
        $userId = $result['Id'];

        $otherStatement = self::$db->prepare(
            'INSERT INTO questions(questionTitle,questionText,authorId,categoryId) VALUES( ?, ?, ?,? )');
        $otherStatement->bind_param('ssii', $name,$text,$userId,$categoryId);


        $otherStatement->execute();
        return $otherStatement->affected_rows > 0;
    }

    public function getAll($page,$size){
        $statement = self::$db->prepare(
            "SELECT q.*,u.username,c.Name as categoryName  FROM questions q
            join users u on q.authorId=u.Id
            join categories c on q.categoryId=c.Id
            order by q.questionId desc
			LIMIT ?, ?");
        $statement->bind_param("ii",$page,$size);
        $statement->execute();
        $result = $statement->get_result()->fetch_all(MYSQL_ASSOC);
        return $result;
    }

    public function getAllByAuthor($author){
        $statement = self::$db->query(
            "SELECT q.*,u.username,c.Name as categoryName FROM questions q
            join users u on q.authorId=u.Id
            join categories c on q.categoryId=c.Id
            where u.username = 'test9'
            order by q.questionId desc");

        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getOne($id){
        $upViewstatement = self::$db->prepare('UPDATE questions
       SET  numberOfViews=numberOfViews +1
        where questionID=?');
        $upViewstatement->bind_param("i",$id);
        $upViewstatement->execute();


        $statement = self::$db->prepare(
            "select q.questionId,q.questionTitle,q.numberOfViews,q.questionText,q.dateCreated as 'questionDate'
             ,u.username
            from questions q
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