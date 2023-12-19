<?php
require_once 'models/Courses.php';

class CoursesService
{
    private $coursesModel;

    public function __construct()
    {
        global $db;
        $this->coursesModel = new Courses($db);
    }

    public function getAllCourses()
    {
        return $this->coursesModel->getAllCourses();
    }

    public function getCourseById($id)
    {
        return $this->coursesModel->getCourseById($id);
    }

    public function createCourse($title, $description)
    {

        return $this->coursesModel->createCourse($title, $description);
    }

    public function updateCourse($id, $title, $description)
    {
        

        return $this->coursesModel->updateCourse($id, $title, $description);
    }

    public function deleteCourse($id)
    {
    

        return $this->coursesModel->deleteCourse($id);
    }
}
?>