<?php

class CourseUserService
{
    private $db; 

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function enrollUserToCourse($userId, $courseId)
    {
        $createdAt = date('Y-m-d H:i:s');
        $updatedAt = $createdAt;


        $query = "INSERT INTO course_user (course_id, user_id, created_at, updated_at) VALUES (?, ?, ?, ?)";
        $statement = $this->db->prepare($query);
        $statement->bind_param("iiss", $courseId, $userId, $createdAt, $updatedAt);
        $statement->execute();


        return $statement->affected_rows > 0;
    }

    public function unenrollUserFromCourse($userId, $courseId)
    {

        $query = "DELETE FROM course_user WHERE user_id = ? AND course_id = ?";
        $statement = $this->db->prepare($query);
        $statement->bind_param("ii", $userId, $courseId);
        $statement->execute();


        return $statement->affected_rows > 0;
    }

    public function getUsersEnrolledInCourse($courseId)
    {

        $query = "SELECT user_id FROM course_user WHERE course_id = ?";
        $statement = $this->db->prepare($query);
        $statement->bind_param("i", $courseId);
        $statement->execute();
        $result = $statement->get_result();

        $userIds = [];
        while ($row = $result->fetch_assoc()) {
            $userIds[] = $row['user_id'];
        }
        return $userIds;
    }

    public function getCoursesEnrolledByUser($userId)
    {

        $query = "SELECT course_id FROM course_user WHERE user_id = ?";
        $statement = $this->db->prepare($query);
        $statement->bind_param("i", $userId);
        $statement->execute();
        $result = $statement->get_result();


        $courseIds = [];
        while ($row = $result->fetch_assoc()) {
            $courseIds[] = $row['course_id'];
        }
        return $courseIds;
    }
}

?>
