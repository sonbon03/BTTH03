<?php

class LessonController
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


        return $statement->insert_id;
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

    public function getLesson($lessonId)
    {
        $query = "SELECT * FROM lessons WHERE id = ?";
        $statement = $this->db->prepare($query);
        $statement->bind_param("i", $lessonId);
        $statement->execute();
        $result = $statement->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new Lesson(
                $row['id'],
                $row['course_id'],
                $row['title'],
                $row['description'],
                $row['created_at'],
                $row['updated_at']
            );
        } else {
            return null;
        }
    }
}

?>
