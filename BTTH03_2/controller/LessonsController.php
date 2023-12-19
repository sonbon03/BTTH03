<?php

class LessonController
{
    private $lessons;

    public function __construct()
    {
        $this->lessons = array();
    }

    public function addLesson(Lesson $lesson)
    {
        $this->lessons[$lesson->getId()] = $lesson;
    }

    public function getLesson($lessonId)
    {
        if (isset($this->lessons[$lessonId])) {
            return $this->lessons[$lessonId];
        }

        return null;
    }

    public function getAllLessons()
    {
        return $this->lessons;
    }

    public function deleteLesson($lessonId)
    {
        if (isset($this->lessons[$lessonId])) {
            unset($this->lessons[$lessonId]);
            return true;
        }

        return false;
    }
}

?>
