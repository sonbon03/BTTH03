<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="width-page">
        <h5>Danh sách câu hỏi</h5>
        <table>
            <thead>
                <tr>
                    <th>Mã số</th>
                    <th>Mã số câu hỏi</th>
                    <th>Câu hỏi</th>
                    <th>Tạo bởi</th>
                    <th>Cập nhật bởi</th>
                    <th>Sự kiện</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <?php 
                     foreach($questions as $question): ?>
                    <td><?= $question['id'] ?></td>
                    <td><?= $question['quiz_id'] ?></td>
                    <td><?= $question['question'] ?></td>
                    <td><?= $question['created_at'] ?></td>
                    <td><?= $question['updated_at'] ?></td>
                    <td>
                        <a href="index.php?controller=questions&action=edit&id=<?= $question['id']; ?>">Edit</a>
                        <a href="index.php?controller=questions&action=edit&id=<?= $question['id']; ?>">Delete</a>
                    </td>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>