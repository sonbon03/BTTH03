<?php
include "../service/QuestionsService.php";
class HomeController {
    public function index() {
        require "views/home/index.php";
    }
}
