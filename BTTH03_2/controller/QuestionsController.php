
<?php
// include "../models/Questions.php";
include "services/QuestionsService.php";

class QuestionsController{
        public function index(){
            $questionsService = new QuestionsService();

            $questions = $questionsService::getAll();

            require 'views/questions/index.php';
        }

        public function  create(){
            $questions = new QuestionsService();
            $questionsAllQuizId = $questions::getAllQuizId();

            require 'views/questions/create.php';
        }

        public function store(){
            $id = $_POST['id'];
            $quiz_id = $_POST['selectQuizId'];
            $question = $_POST['question'];
            $created_at = $_POST['created_at'];
            $updated_at = $_POST['updated_at'];

            $questions = new QuestionsService();

            $questions->save($id, $quiz_id, $question, $created_at, $updated_at);

            header('Location: index.php?controller=questions&action=index');
        }
        public function edit(){
            $id = $_GET['id'];

            $questionsService = new QuestionsService();

            $questions = $questionsService::getIdData($id);
            $questionsAllQuizId = $questionsService::getAllQuizId();

            require 'views/questions/edit.php';
        }
        
        public function update(){
            $quiz_id = $_POST["selectQuizId"];
            $question = $_POST['question'];
            $created_at = $_POST['created_at'];
            $updated_at = $_POST['updated_at'];
            $id = $_POST['id'];

            $questionsService = new QuestionsService();

            $questionsService->update($id, $quiz_id, $question, $created_at, $updated_at);

            header('Location: index.php?controller=questions&action=index');
        }

        public function delete(){
            $id = $_GET['id'];

            $questionsService = new QuestionsService();

            $questionsService->delete($id);

            header('Location: index.php?controller=questions&action=index');
        }
    }