<?php
include "models/Options.php";
class OptionsController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function index() {
        $options = $this->model->getAllOptions();
        include 'views/options/index.php';
    }

    public function edit($id) {
        $lesson = $this->model->getOptionsById($id);
        include 'views/options/edit.php';
    }

    public function update($id, $question_id, $option, $is_correct) {
        $this->model->updateOption($id, $question_id, $option, $is_correct);

        header('Location: index.php?controller=options&action=index');
    }

    public function delete($id) {
        $this->model->deleteLesson($id);

        header('Location: index.php?controller=options&action=index');
    }
}
