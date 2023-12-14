<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="./css/layout.css">
<link rel="stylesheet" href="./css/media-screen.css">
<link rel="stylesheet" href="./css/vendor.min.css">

<body>
    <?php
include "header.php";
?>
    <div class="text-run">
        <p> Wellcome Learning Manage System Page</p>
    </div>
    <div class="text-run list">
        <p>List Manage</p>
    </div>
    <div class="group-btn d-flex flex-wrap">
        <button><a href="">Courses</a></button>
        <button><a href="">CoursesUser</a></button>
        <button><a href="">Lessons</a></button>
        <button><a href="">Materials</a></button>
        <button><a href="">Options</a></button>
        <button><a href="">Questions</a></button>
        <button><a href="">Quizzes</a></button>
        <button><a href="">Users</a></button>
    </div>
    <?php
include "footer.php";
?>

    <script src="./js/vendor.min.js"></script>
</body>

</html>