<?php
/**
 * Created by PhpStorm.
 * User: S.KoeH
 * Date: 05-05-15
 * Time: 10:31 AM
 */

class AccountModel extends BaseModel{

    public function register($username,$password,$fullname){
        if ($username == ''||$password==''||$fullname=='') {
            return 'empty';
        }
        $statement = self::$db->prepare('SELECT COUNT(Id) from users where username = ?');
        $statement->bind_param("s",$username);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();

        if($result['COUNT(Id)']){
            return false;
        }
        $hash_pass = password_hash($password,PASSWORD_BCRYPT);

        $registerStatement = self::$db->prepare('Insert Into users(username,password_hash,fullname) values(?,?,?)');
        $registerStatement->bind_param("sss",$username,$hash_pass,$fullname);
        $registerStatement->execute();

        return true;
    }

    public function login($username,$password){
        if ($username == ''||$password=='') {
            return false;
        }
        $statement = self::$db->prepare('SELECT Id,username,password_hash,isAdmin from users where username = ?');
        $statement->bind_param("s",$username);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();

        if(password_verify($password,$result['password_hash'])){
            if($result['isAdmin']==1){
                $_SESSION['isAdmin']=true;
            }
            return true;
        }

        return false;
    }
}