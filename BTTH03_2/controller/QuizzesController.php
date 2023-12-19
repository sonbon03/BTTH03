
<?php
// require_once "../models/Quizzes.php";
include "../service/QuizzesService.php";

class QuizzesController{
        public function index(){
            $quizzesService = new QuizzesService();
            $quizzes = $quizzesService::getAll();
            require 'views/quizzes/index.php';
        }

        public function  create(){
            require 'views/quizzes/create.php';
        }

        public function store(){
            $id = $_POST['id'];
            $lesson_id = $_POST['lesson_id'];
            $title = $_POST['title'];
            $created_at = $_POST['created_at'];
            $updated_at = $_POST['updated_at'];
            $quizzes = new Quizzes();
            $quizzes->setId($id);
            $quizzes->setLesson_id($lesson_id);
            $quizzes->setTitle($title);
            $quizzes->setCreatedAt($created_at);
            $quizzes->setUpdatedAt($updated_at);

            header('Location: index.php?controller=quizzes&action=index');
        }
        public function edit(){
            $id = $_GET['id'];
            $quizzes = Quizzes::getIdData();
            require '../views/quizzes/edit.php';
        }
    }
