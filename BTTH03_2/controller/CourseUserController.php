<?php

class CourseUserController
{
    private $users; // Danh sách người dùng
    private $courses; // Danh sách khóa học

    public function __construct()
    {
        $this->users = array();
        $this->courses = array();
    }

    public function addUser(User $user)
    {
        $this->users[$user->getId()] = $user;
    }

    public function addCourse(Course $course)
    {
        $this->courses[$course->getId()] = $course;
    }

    public function enrollUserInCourse($userId, $courseId)
    {
        if (!isset($this->users[$userId]) || !isset($this->courses[$courseId])) {
            return false;
        }

        $user = $this->users[$userId];
        $course = $this->courses[$courseId];

        $user->addCourse($course);
        $course->addUser($user);

        return true;
    }

    public function getUserCourses($userId)
    {
        if (!isset($this->users[$userId])) {
            return array();
        }

        $user = $this->users[$userId];
        return $user->getCourses();
    }

    public function getCourseUsers($courseId)
    {
        if (!isset($this->courses[$courseId])) {
            return array();
        }

        $course = $this->courses[$courseId];
        return $course->getUsers();
    }
}

?>
