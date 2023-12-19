<?php
require_once("../config.php");
class Quizzes
{
    private $id, $lesson_id, $file_path, $created_id, $updated_at;

    public function __construct($id, $lesson_id, $file_path, $created_id, $updated_at)
    {
        $this->id = $id;
        $this->lesson_id = $lesson_id;
        $this->file_path = $file_path;
        $this->created_id = $created_id;
        $this->updated_at = $updated_at;
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    // Get quiz by id
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    // Getter và setter cho thuộc tính $lesson_id
    public function getLessonId() {
        return $this->lesson_id;
    }
    
    public function setLessonId($lesson_id) {
        $this->lesson_id = $lesson_id;
    }
    
    // Getter và setter cho thuộc tính $file_path
    public function getFilepath() {
        return $this->file_path;
    }
    
    public function setFile_path($file_path) {
        $this->file_path = $file_path;
    }
    
    // Getter và setter cho thuộc tính $created_id
    public function getCreatedId() {
        return $this->created_id;
    }
    
    public function setCreatedId($created_id) {
        $this->created_id = $created_id;
    }
    
    // Getter và setter cho thuộc tính $updated_at
    public function getUpdatedAt() {
        return $this->updated_at;
    }
    
    public function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }

}
