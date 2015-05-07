<?php
/**
 * Created by PhpStorm.
 * User: S.KoeH
 * Date: 05-05-15
 * Time: 10:32 AM
 */

class AccountsController extends BaseController {

    public function OnInit(){
        $this->db=new AccountModel();
    }

    public function register(){
        if($this->isPost){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $fullname = $_POST['name'];
            $isRegister = $this->db->register($username,$password,$fullname);
            if($isRegister==='empty'){
                $this->showMessage('You write empty username, password or full name !' ,'error');
            }
            elseif($isRegister){
                $_SESSION['username']=$username;
               $this->redirect('home');
            }
            if($isRegister==false){
                $this->showMessage('This username is already taken','error');
            }
        }
    }
    public function login(){
        if($this->isPost){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $isLogged = $this->db->login($username,$password);
            if($isLogged){
                $_SESSION['username']=$username;
                $this->redirect('home');
                $this->showMessage('Successfull login, Be welcome','success');
            }
            else{
                $this->showMessage('Invalid username or password','error');
            }
        }
    }
    public function logout(){
        session_unset();
        $this->redirect('home');
        $this->showMessage('Successfull logout','success');
    }

}