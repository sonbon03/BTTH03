<?php
require_once ("../config.php");
require_once ("../models/Questions.php");

class QuestionsService {
    public static function getAll (){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->query('SELECT * FROM questions ORDER BY id DESC');
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
    public function save() {
        $query = $this->db->prepare('INSERT INTO questions (id, quiz_id, question, created_at, updated_at) VALUES (:id, :quiz_id, :question, :created_at, :updated_at) ');
        $query->bindParam(':id', $this->id, PDO::PARAM_INT);
        $query->bindParam(':quiz_id', $this->quiz_id, PDO::PARAM_INT);
        $query->bindParam(':question', $this->question, PDO::PARAM_STR);
        $query->bindParam(':created_at', $this->created_at, PDO::PARAM_STR);
        $query->bindParam(':updated_at', $this->updated_at, PDO::PARAM_STR);
        $query->execute();
    }
    public function  update(){
        $query = $this->db->prepare('UPDATE question SET quiz_id = :quiz_id, question = :question, created_at =:created_at, updated_at =:updated_at WHERE id = :id');
        $query->bindParam(':id', $this->id, PDO::PARAM_INT);
        $query->bindParam(':quiz_id', $this->quiz_id, PDO::PARAM_INT);
        $query->bindParam(':question', $this->question, PDO::PARAM_STR);
        $query->bindParam(':created_at', $this->created_at, PDO::PARAM_STR);
        $query->bindParam(':updated_at', $this->updated_at, PDO::PARAM_STR);
        $query->execute();
    }

    public function  delete(){
        $query = $this->db->prepare('DELETE FROM question WHERE id = :id ');
        $query->bindParam(':id', $this->id, PDO::PARAM_INT);
        $query->execute();
    }
}