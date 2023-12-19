<?php
require_once ("../config.php");
require_once ("../models/Materials.php");

class MaterialsService {
    public static function getAll (){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->query('SELECT * FROM materials ORDER BY id DESC');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static  function  getIdData($id){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->prepare('SELECT * FROM materials WHERE id = :id');
        $query->bindParam(':id',$id, PDO::PARAM_INT);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public function save() {
        $query = $this->db->prepare('INSERT INTO materials (id, lesson_id, file_path, created_at, updated_at) VALUES (:id, :lesson_id, :file_path, :created_at, :updated_at) ');
        $query->bindParam(':id', $this->id, PDO::PARAM_INT);
        $query->bindParam(':lesson_id', $this->lesson_id, PDO::PARAM_INT);
        $query->bindParam(':file_path', $this->file_path, PDO::PARAM_STR);
        $query->bindParam(':created_at', $this->created_at, PDO::PARAM_STR);
        $query->bindParam(':updated_at', $this->updated_at, PDO::PARAM_STR);
        $query->execute();
    }
    public function  update(){
        $query = $this->db->prepare('UPDATE materials SET lesson_id = :lesson_id, file_path = :file_path, created_at =:created_at, updated_at =:updated_at WHERE id = :id');
        $query->bindParam(':id', $this->id, PDO::PARAM_INT);
        $query->bindParam(':lesson_id', $this->lesson_id, PDO::PARAM_INT);
        $query->bindParam(':file_path', $this->file_path, PDO::PARAM_STR);
        $query->bindParam(':created_at', $this->created_at, PDO::PARAM_STR);
        $query->bindParam(':updated_at', $this->updated_at, PDO::PARAM_STR);
        $query->execute();
    }

    public function  delete(){
        $query = $this->db->prepare('DELETE FROM materials WHERE id = :id ');
        $query->bindParam(':id', $this->id, PDO::PARAM_INT);
        $query->execute();
    }
}
