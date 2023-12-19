<?php

class Lesson
{
    private $id;
    private $courseId;
    private $title; 
    private $description;
    private $createdAt;
    private $updatedAt; 

    public function __construct($id, $courseId, $title, $description, $createdAt, $updatedAt)
    {
        $this->id = $id;
        $this->courseId = $courseId;
        $this->title = $title;
        $this->description = $description;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCourseId()
    {
        return $this->courseId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
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
