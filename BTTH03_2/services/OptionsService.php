<?php
require_once ("../models/Options.php");
class OptionsService{
    public static  function  getAll(){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->query('SELECT * FROM options ORDER BY id DESC');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static  function  getIdData($id){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $db->query('SELECT * FROM options WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save(){
        $query = $this->db->prepare('INSERT INTO options(id, question_id, option, is_correct, created_at, updated_at) VALUES (:id, :question_id, :option, :is_correct, :created_at, :updated_at)');
        $query->bindParam(':id', $this->id, PDO::PARAM_INT);
        $query->bindParam(':question_id', $this->question_id, PDO::PARAM_INT);
        $query->bindParam(':option', $this->option, PDO::PARAM_STR);
        $query->bindParam(':is_correct', $this->is_correct, PDO::PARAM_INT);
        $query->bindParam(':created_at', $this->created_at, PDO::PARAM_STR);
        $query->bindParam(':updated_at', $this->updated_at, PDO::PARAM_STR);
        $query->execute();
    }
    public function update(){
        $query = $this->db->prepare('UPDATE options SET question_id = :question_id,option = :option, is_correct =  :is_correct, created_at =  :created_at, updated_at = :updated_at WHERE id = :id');
        $query->bindParam(':question_id', $this->question_id, PDO::PARAM_INT);
        $query->bindParam(':option', $this->option, PDO::PARAM_STR);
        $query->bindParam(':is_correct', $this->is_correct, PDO::PARAM_INT);
        $query->bindParam(':created_at', $this->created_at, PDO::PARAM_STR);
        $query->bindParam(':updated_at', $this->updated_at, PDO::PARAM_STR);
        $query->execute();
    }
    public function  delete(){
        $query = $this->db->prepare('DELETE FROM options WHERE id = :id');
        $query->bindParam(':id', $this->id, PDO::PARAM_INT);
        $query->execute();
    }
}