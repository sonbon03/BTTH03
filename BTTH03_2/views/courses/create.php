<!-- views/courses/create.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>
    <h1>Create Course</h1>
    <form method="POST" action="index.php?controller=courses&action=store">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" required></textarea><br>

        <button type="submit">Create</button>
    </form>
</body>
</html>