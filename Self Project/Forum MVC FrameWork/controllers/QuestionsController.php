<?php

class QuestionsController extends BaseController {
    public function oninit(){

    }

    public  function create (){

    }
    public  function show($id){
        $this->db = new QuestionsModel();
        $this->question=$this->db->getOne($id);
    }

    public  function index (){
        $this->db = new QuestionsModel();
        $this->questions=$this->db->getAll();
    }
}