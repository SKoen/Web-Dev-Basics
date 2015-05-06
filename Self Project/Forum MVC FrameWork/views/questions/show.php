<?php
include('/views/layouts/QuestionWindow/Question.php');

include('/views/layouts/QuestionWindow/PostAnswer.php');
if(count($this->question)>7){
    include('/views/layouts/QuestionWindow/QuestionAnswers.php');
}
?>