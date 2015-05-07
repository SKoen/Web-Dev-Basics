<?php

class AnswersController extends BaseController {
    public function createAnswer (){
        if ($this->isPost) {
            $this->db = new AnswersModel();
            $name = $_POST['name'];
            if($name=="")$name=$_SESSION['username'];
            $email = $_POST['email'];
            $text = $_POST['text'];
            $questionId = $_POST['questionId'];
            if ($this->db->createAnswer($name, $email, $text,$questionId)) {
                $url = '/questions/show/'.$questionId;
                $this->redirectToUrl($url);
            } else echo "BAD";
        }
    }

    public function getAll($questionId){
        $this->db= new AnswersModel();
        $this->answers = $this->db->getAllByQuestionId($questionId);
        $this->renderView('',false);
    }
}