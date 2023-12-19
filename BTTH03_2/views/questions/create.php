<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="width-page">
        <h5>Tạo câu hỏi</h5>
        <form action="index.php?controller=questions&action=store" method="post">

            <label for="quiz_id">Mã</label>
            <input type="text" name='id'>

            <label for="quiz_id">Mã câu hỏi</label>
            <select name="selectQuizId" id="selectQuizId">
                <?php
                    foreach($questionsAllQuizId as $questionAllQuizId):
                ?>
                    <option value="<?=$questionAllQuizId['quiz_id']?>"><?=$questionAllQuizId['quiz_id']?></option>
                <?php
                      endforeach; ?>
            </select>
            <label for="question">Câu hỏi</label>
            <textarea name="question" id="" cols="30" rows="10"></textarea>

            <label for="created_at">Thời gian tạo</label>
            <input type="datetime" name='created_at'>

            <label for="updated_at">Thời gian cập nhật</label>
            <input type="datetime" name='updated_at'>

            <input type="submit" value="Thêm mới">
        </form>
    </div>
</body>
</html>