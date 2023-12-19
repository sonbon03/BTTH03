<?php

class CourseUser
{
    private $courseId;
    private $userId; 
    private $createdAt; 
    private $updatedAt; 

    public function __construct($courseId, $userId, $createdAt, $updatedAt)
    {
        $this->courseId = $courseId;
        $this->userId = $userId;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function getCourseId()
    {
        return $this->courseId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

?>
