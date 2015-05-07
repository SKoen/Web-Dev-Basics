<?php

class QuestionsController extends BaseController {
    public function onInit(){
        $this->title='Question';
        $this->db = new QuestionsModel();
    }

    public  function create (){
        if ($this->isPost) {
            $name = $_POST['name'];
            $text = $_POST['text'];
            $username = $_POST['username'];
            $categoryId = $_POST['categoryId'];
            if ($this->db->createQuestion($name,$text,$username,$categoryId)) {
                $this->redirectToUrl('/questions/user/'.$username);
            } else echo "BAD";
        }

    }
    public  function show($id){
        $this->question=$this->db->getOne($id);
    }

    public  function index (){
        $this->questions=$this->db->getAll();
    }

    public  function user ($username){
        $this->questions=$this->db->getAllByAuthor($username);
    }
}