<?php
require_once 'models/Courses.php';
require_once 'service/CoursesService.php';

class CoursesController
{
    private $coursesService;

    public function __construct()
    {
        $this->coursesService = new CoursesService();
    }

    public function index()
    {
        $courses = $this->coursesService->getAllCourses();
        require 'views/courses/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $description = $_POST['description'];

            // Kiểm tra và xử lý dữ liệu

            $this->coursesService->createCourse($title, $description);
            header('Location: index.php?controller=courses');
        } else {
            require 'views/courses/create.php';
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];

            // Kiểm tra và xử lý dữ liệu

            $this->coursesService->updateCourse($id, $title, $description);
            header('Location: index.php?controller=courses');
        } else {
            $id = $_GET['id'];
            $course = $this->coursesService->getCourseById($id);
            require 'views/courses/edit.php';
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->coursesService->deleteCourse($id);
        header('Location: index.php?controller=courses');
    }
}
?>