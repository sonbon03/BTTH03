<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="width-page">
        <h5>Chỉnh sửa câu hỏi</h5>
        <form action="index.php?controller=questions&action=update" method="post">
            <input type="hidden" name='id' value="<?= $questions['id']?>">

            <label for="quiz_id">Mã câu hỏi</label>
            <select>
                <option value="<?=$questions['quiz_id']?>"><?=$questions['quiz_id']?></option>
                <?php
                    foreach($questions as $question):
                ?>
                    <option value="<?=$question['quiz_id']?>"><?=$question['quiz_id']?></option>
                <?php endforeach; ?>
            </select>
            <label for="question">Câu hỏi</label>
            <textarea name="" id="" cols="30" rows="10"><?php $questions['question']?></textarea>

            <label for="created_at">Được tạo bởi</label>
            <input type="text" name='created_at' value="<?= $questions['created_at']?>">

            <label for="updated_at">Cập nhật bởi</label>
            <input type="text" name='updated_at' value="<?= $questions['updated_at']?>">

            <input type="submit" value="Cập nhật">
        </form>
    </div>
</body>
</html>