<?php
include "../config.php";
include "../models/Questions.php";

class QuestionsService {
    public static function getAll (){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->query('SELECT * FROM questions ORDER BY id DESC');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAllQuizId(){
        $db = new PDO('mysql:host='. DB_HOST . ';dbname='. DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->query('SELECT quiz_id FROM questions GROUP BY quiz_id');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static  function  getIdData($id){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->prepare('SELECT * FROM questions WHERE id = :id');
        $query->bindParam(':id',$id, PDO::PARAM_INT);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function save($id, $quiz_id, $question, $created_at, $updated_at) {

        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->prepare('INSERT INTO questions (id, quiz_id, question, created_at, updated_at) VALUES (:id, :quiz_id, :question, :created_at, :updated_at)');

        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->bindParam(':quiz_id', $quiz_id, PDO::PARAM_INT);
        $query->bindParam(':question', $question, PDO::PARAM_STR);
        $query->bindParam(':created_at', $created_at, PDO::PARAM_STR);
        $query->bindParam(':updated_at', $updated_at, PDO::PARAM_STR);
        return $query->execute();
    }
    public static function update($id, $quiz_id, $question, $created_at, $updated_at){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->prepare('UPDATE questions SET quiz_id = :quiz_id, question = :question, created_at =:created_at, updated_at =:updated_at WHERE id = :id');
        echo ("1");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->bindParam(':quiz_id', $quiz_id, PDO::PARAM_INT);
        $query->bindParam(':question', $question, PDO::PARAM_STR);
        $query->bindParam(':created_at', $created_at, PDO::PARAM_STR);
        $query->bindParam(':updated_at', $updated_at, PDO::PARAM_STR);
        $result = $query->execute();
        return $result;
    }

    public static function delete($id){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->prepare('DELETE FROM questions WHERE id = :id ');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $result = $query->execute();
        return $result;
    }
}