<?php

class QuestionsController extends BaseController {


    public  function create (){

    }

    public  function index (){
        $this->questions = array(
            array('AuthorName'=>'Pesho','QuestionName'=>'Problem1','QuestionText'=>'Why this happend','NumberOfVisits'=>'5'),
            array('AuthorName'=>'Gosho','QuestionName'=>'Problem2','QuestionText'=>'Why this again','NumberOfVisits'=>'10'),
            array('AuthorName'=>'Pepi','QuestionName'=>'Problem3','QuestionText'=>'Why this and again','NumberOfVisits'=>'100')
        );
    }
}