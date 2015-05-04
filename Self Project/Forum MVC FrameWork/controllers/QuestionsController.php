<?php

class QuestionsController extends BaseController {
    public function oninit(){
        $this->title = "Questions";
        $this->db = new QuestionsModel();
    }
    public  function create (){

    }
    public  function index (){
        $this->db = new QuestionsModel();
        $this->questions=$this->db->getAll();
    }
}