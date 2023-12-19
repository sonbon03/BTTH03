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
              <a class="nav-link" href="index.php?controller=home&action=index">Home</a>
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
              <a class="nav-link active" href="index.php?controller=options&action=index">Options</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.php?controller=questions&action=index">Questions</a>
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
    <div class="width-page my-3">

       <div class="d-flex w-100 justify-content-between my-2">
         <h5>Danh sách lựa chọn</h5>
         <button class="">Thêm mới</button>
       </div>
      <table class="w-100">
        <thead>
        <tr>
          <th>Mã số</th>
          <th>Mã số câu hỏi</th>
          <th>Lựa chọn</th>
          <th>Đáp án</th>
          <th>Tạo bởi</th>
          <th>Cập nhật bởi</th>
          <th>Sự kiện</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($options as $option): ?>
          <tr>
            <td><?= $option['id'] ?></td>
            <td><?= $option['question_id'] ?></td>
            <td><?= $option['option'] ?></td>
            <td><?= $option['is_correct'] ?></td>
            <td><?= $option['created_at'] ?></td>
            <td><?= $option['updated_at'] ?></td>
            <td>
              <a href="index.php?controller=options&action=edit&id=<?= $option['id']; ?>">Edit</a>
              <a href="index.php?controller=options&action=delete&id=<?= $option['id']; ?>">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>

        </tbody>
      </table>
    </div>
<?php
include "footer.php";
?>

<script src="./js/vendor.min.js"></script>
</body>

</html>