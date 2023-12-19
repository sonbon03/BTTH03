<?php

class LessonService
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function createLesson($courseId, $title, $description)
    {
        $createdAt = date('Y-m-d H:i:s');
        $updatedAt = $createdAt;


        $query = "INSERT INTO lessons (course_id, title, description, created_at, updated_at) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->db->prepare($query);
        $statement->bind_param("issss", $courseId, $title, $description, $createdAt, $updatedAt);
        $statement->execute();


        return $statement->affected_rows > 0;
    }

    public function updateLesson($lessonId, $title, $description)
    {
        $updatedAt = date('Y-m-d H:i:s');


        $query = "UPDATE lessons SET title = ?, description = ?, updated_at = ? WHERE id = ?";
        $statement = $this->db->prepare($query);
        $statement->bind_param("sssi", $title, $description, $updatedAt, $lessonId);
        $statement->execute();


        return $statement->affected_rows > 0;
    }

    public function deleteLesson($lessonId)
    {

        $query = "DELETE FROM lessons WHERE id = ?";
        $statement = $this->db->prepare($query);
        $statement->bind_param("i", $lessonId);
        $statement->execute();


        return $statement->affected_rows > 0;
    }

    public function getLessonById($lessonId)
    {
        $query = "SELECT * FROM lessons WHERE id = ?";
        $statement = $this->db->prepare($query);
        $statement->bind_param("i", $lessonId);
        $statement->execute();
        $result = $statement->get_result();


        return $result->fetch_assoc();
    }

    public function getLessonsByCourseId($courseId)
    {

        $query = "SELECT * FROM lessons WHERE course_id = ?";
        $statement = $this->db->prepare($query);
        $statement->bind_param("i", $courseId);
        $statement->execute();
        $result = $statement->get_result();


        $lessons = [];
        while ($row = $result->fetch_assoc()) {
            $lessons[] = $row;
        }
        return $lessons;
    }
}

?>
