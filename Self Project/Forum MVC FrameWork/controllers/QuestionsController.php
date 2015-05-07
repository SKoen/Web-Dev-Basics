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
            } else echo $this->showMessage('Error must to fill all fields','error');
        }

    }

    public  function show($id){
        $this->question=$this->db->getOne($id);
    }
    public  function delete($id){
        $this->db->delete($id);
        $this->redirect('questions');
    }

    public  function index ($page=0,$pageSize=10){


        $this->page=$page;
        $this->pageSize=$pageSize;

        $page=$page*$pageSize;
        $this->questions=$this->db->getAll($page,$pageSize);
    }

    public  function user ($username){
        if(isset($_SESSION['username'])) {
            if($_SESSION['username']==$username) {
                $this->questions = $this->db->getAllByAuthor($username);
            }
            else {
                header("Location: " . '/');
            }
        }
        else {
            header("Location: " . '/');
        }
    }
}