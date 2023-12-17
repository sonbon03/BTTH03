
<?php
// require_once "../models/Questions.php";
include "../service/QuestionsService.php";

class QuestionsController{
        public function index(){
            $questionsService = new QuestionsService();
            $questions = $questionsService::getAll();
            require 'views/questions/index.php';
        }

        public function  create(){
            require 'views/questions/create.php';
        }

        public function store(){
            $id = $_POST['id'];
            $quiz_id = $_POST['quiz_id'];
            $question = $_POST['question'];
            $created_at = $_POST['created_at'];
            $updated_at = $_POST['updated_at'];
            $questions = new Questions();
            $questions->setId($id);
            $questions->setQuizId($quiz_id);
            $questions->setQuestion($question);
            $questions->setCreatedAt($created_at);
            $questions->setUpdatedAt($updated_at);

            header('Location: index.php?controller=questions&action=index');
        }
        public function edit(){
            $id = $_GET['id'];
            $questions = Questions::getIdData();
            require '../views/questions/edit.php';
        }
    }