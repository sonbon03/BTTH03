-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2023 lúc 05:10 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lms`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Introduction to Programming', 'Learn the basics of programming', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(2, 'Web Development Fundamentals', 'Explore the world of web development', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(3, 'Data Science Essentials', 'Introduction to data science', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(4, 'Graphic Design Basics', 'Fundamentals of graphic design', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(5, 'Mobile App Development', 'Building mobile applications', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(6, 'Database Management', 'Introduction to database systems', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(7, 'Network Security', 'Securing computer networks', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(8, 'Artificial Intelligence', 'Introduction to AI concepts', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(9, 'Game Development Fundamentals', 'Building games from scratch', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(10, 'Robotics and Automation', 'Exploring robotics and automation', '2023-12-14 16:01:15', '2023-12-14 16:01:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course_user`
--

CREATE TABLE `course_user` (
  `id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `course_user`
--

INSERT INTO `course_user` (`id`, `course_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(2, 1, 2, '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(3, 1, 3, '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(4, 2, 2, '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(5, 2, 3, '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(6, 2, 4, '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(7, 3, 4, '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(8, 3, 5, '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(9, 3, 6, '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(10, 3, 7, '2023-12-14 16:01:15', '2023-12-14 16:01:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lessons`
--

CREATE TABLE `lessons` (
  `id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lessons`
--

INSERT INTO `lessons` (`id`, `course_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Getting Started with Programming', 'Introduction to programming concepts', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(2, 1, 'Variables and Data Types', 'Understanding variables and data types', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(3, 1, 'Control Flow', 'Conditional statements and loops', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(4, 2, 'HTML Basics', 'Introduction to HTML', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(5, 2, 'CSS Styling', 'Styling web pages with CSS', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(6, 2, 'JavaScript Fundamentals', 'Basics of JavaScript programming', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(7, 3, 'Data Science Overview', 'Introduction to data science and its applications', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(8, 3, 'Data Analysis with Python', 'Using Python for data analysis', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(9, 3, 'Machine Learning Basics', 'Introduction to machine learning concepts', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(10, 4, 'Design Principles', 'Basic principles of graphic design', '2023-12-14 16:09:23', '2023-12-14 16:09:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `materials`
--

INSERT INTO `materials` (`id`, `lesson_id`, `title`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'Programming Guide', '/files/programming_guide.pdf', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(2, 1, 'Sample Code', '/files/sample_code.zip', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(3, 2, 'Variable Cheat Sheet', '/files/variable_cheat_sheet.doc', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(4, 2, 'CSS Cheat Sheet', '/files/css_cheat_sheet.pdf', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(5, 3, 'Loop Examples', '/files/loop_examples.zip', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(6, 4, 'HTML Reference', '/files/html_reference.pdf', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(7, 5, 'CSS Tips and Tricks', '/files/css_tips_and_tricks.doc', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(8, 6, 'JavaScript Exercises', '/files/javascript_exercises.zip', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(9, 7, 'Python Data Analysis Tutorial', '/files/python_data_analysis_tutorial.pdf', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(10, 8, 'Machine Learning Basics Presentation', '/files/ml_basics_presentation.pptx', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(11, 9, 'Graphic Design Principles', '/files/graphic_design_principles.doc', '2023-12-14 16:09:23', '2023-12-14 16:09:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `option_` text DEFAULT NULL,
  `is_correct` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`id`, `question_id`, `option_`, `is_correct`, `created_at`, `updated_at`) VALUES
(1, 1, 'A container for storing data values.', 1, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(2, 1, 'A reserved memory location to store values.', 0, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(3, 2, 'Markup language for creating web pages.', 1, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(4, 2, 'Cascading Style Sheets.', 0, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(5, 3, 'To control the flow of program execution.', 1, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(6, 3, 'To define the structure of a web page.', 0, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(7, 4, 'Hypertext Markup Language', 1, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(8, 4, 'Hyperlink and Text Markup Language', 0, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(9, 5, 'It defines the layout of elements on a webpage.', 1, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(10, 5, 'It is used for server-side scripting.', 0, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(11, 6, 'To add interactivity to a webpage.', 1, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(12, 6, 'To create a database.', 0, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(13, 7, 'The process of extracting insights from data.', 1, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(14, 7, 'The science of creating data.', 0, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(15, 8, 'Using the pandas library.', 1, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(16, 8, 'Using the matplotlib library.', 0, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(17, 9, 'A subset of artificial intelligence focused on data analysis.', 1, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(18, 9, 'A programming language for building websites.', 0, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(19, 10, 'Balance, contrast, emphasis, and unity.', 1, '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(20, 10, 'Random arrangement of elements.', 0, '2023-12-14 16:09:23', '2023-12-14 16:09:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `question`, `created_at`, `updated_at`) VALUES
(1, 1, 'What is a variable?', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(2, 1, 'How to declare a variable in Python?', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(3, 2, 'What is HTML used for?', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(4, 2, 'What does CSS stand for?', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(5, 3, 'What is an if statement used for?', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(6, 4, 'What does HTML stand for?', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(7, 4, 'How to create a hyperlink in HTML?', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(8, 5, 'What is the box model in CSS?', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(9, 6, 'What is the purpose of JavaScript?', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(10, 7, 'What is data science?', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(11, 8, 'How to read a CSV file in Python?', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(12, 9, 'What is machine learning?', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(13, 10, 'What are the principles of graphic design?', '2023-12-14 16:09:23', '2023-12-14 16:09:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(11) NOT NULL,
  `lesson_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quizzes`
--

INSERT INTO `quizzes` (`id`, `lesson_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'Programming Basics Quiz', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(2, 2, 'Web Development Quiz', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(3, 3, 'Control Flow Quiz', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(4, 4, 'HTML Quiz', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(5, 5, 'CSS Quiz', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(6, 6, 'JavaScript Quiz', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(7, 7, 'Data Science Quiz', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(8, 8, 'Python Quiz', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(9, 9, 'Machine Learning Quiz', '2023-12-14 16:09:23', '2023-12-14 16:09:23'),
(10, 10, 'Graphic Design Quiz', '2023-12-14 16:09:23', '2023-12-14 16:09:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john.doe@example.com', 'password123', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(2, 'Jane Smith', 'jane.smith@example.com', 'securepass', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(3, 'Bob Johnson', 'bob.johnson@example.com', 'pass123', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(4, 'Alice Williams', 'alice.williams@example.com', 'password456', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(5, 'Charlie Brown', 'charlie.brown@example.com', 'securepass789', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(6, 'Emma Davis', 'emma.davis@example.com', 'pass789', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(7, 'Frank Miller', 'frank.miller@example.com', 'password987', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(8, 'Grace Wilson', 'grace.wilson@example.com', 'securepass987', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(9, 'Henry Turner', 'henry.turner@example.com', 'pass567', '2023-12-14 16:01:15', '2023-12-14 16:01:15'),
(10, 'Ivy Turner', 'ivy.turner@example.com', 'password567', '2023-12-14 16:01:15', '2023-12-14 16:01:15');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `course_user`
--
ALTER TABLE `course_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Chỉ mục cho bảng `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Chỉ mục cho bảng `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `course_user`
--
ALTER TABLE `course_user`
  ADD CONSTRAINT `course_user_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `course_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Các ràng buộc cho bảng `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `materials_ibfk_1` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`);

--
-- Các ràng buộc cho bảng `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Các ràng buộc cho bảng `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`);

--
-- Các ràng buộc cho bảng `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_ibfk_1` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
