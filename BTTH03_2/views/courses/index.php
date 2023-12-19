<!-- views/courses/index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
</head>
<body>
    <h1>Courses</h1>
    <a href="index.php?controller=courses&action=create">Create Course</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($courses as $course): ?>
        <tr>
            <td><?php echo $course['id']; ?></td>
            <td><?php echo $course['title']; ?></td>
            <td><?php echo $course['description']; ?></td>
            <td>
                <a href="index.php?controller=courses&action=edit&id=<?php echo $course['id']; ?>">Edit</a>
                <a href="index.php?controller=courses&action=delete&id=<?php echo $course['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>