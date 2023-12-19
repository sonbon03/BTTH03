<!-- views/courses/edit.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>
    <form method="POST" action="index.php?controller=courses&action=update&id=<?php echo $course['id']; ?>">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo $course['title']; ?>" required><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" required><?php echo $course['description']; ?></textarea><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>