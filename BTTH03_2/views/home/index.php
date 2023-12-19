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
<header>
  <div class="width-page">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand">Manage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav gap-3">
            <li class="nav-item">
              <a class="nav-link active" href="index.php?controller=home&action=index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CoursesUser</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Lessons</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Materials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?controller=options&action=index">Options</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?controller=questions&action=index">Questions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Quizzes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Users</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
    <main class="width-page">
        <div class="text-run ">
            <p> Wellcome Learning Manage System Page</p>
        </div>
        <div class="text-run list ">
            <p>List Manage</p>
        </div>
    </main>

    <?php
include "footer.php";
?>

    <script src="./js/vendor.min.js"></script>
</body>

</html>