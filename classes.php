<?php
    class Exam implements JsonSerializable {
    private $title, $time, $course, $questions, $date;

        public function __construct($title, $time, $course, $questions, $date) {
            $this->title = $title;
            $this->time = $time;
            $this->course = $course;
            $this->questions = $questions;
            $this->date = $date;
        }

        public function get_title() {
            return $this->title;
        }

        public function get_time() {
            return $this->time;
        }

        public function get_course() {
            return $this->course;
        }

        public function get_questions() {
            return $this->questions;
        }

        public function get_date() {
            return $this->date;
        }

        public function jsonSerialize(): mixed {
            return [
                'title' => $this->title,
                'time' => $this->time,
                'course' => $this->course,
                'questions' => $this->questions,
                'date' => $this->date
            ];
        }
    }

    class Student {
        private $email, $course, $name, $id;

        public function __construct($email, $course, $name, $id) {
            $this->email = $email;
            $this->course = $course;
            $this->name = $name;
            $this->id = $id;
        }

        public function get_email() {
            return $this->email;
        }

        public function get_course() {
            return $this->course;
        }

        public function get_name() {
            return $this->name;
        }

        public function get_id() {
            return $this->id;
        }
    }
?>