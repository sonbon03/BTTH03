<!-- views/users/edit.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="POST" action="index.php?controller=users&action=update&id=<?php echo $user['id']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $user['name']; ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>