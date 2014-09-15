<?php

class courses extends Controller
{
    function index()
    {
        $this->courses = get_all("SELECT * FROM course");
    }
    function view(){

        // TODO: Protect against SQL injections some day

        $course_id = $this->params[0];
        $this->course = get_first("SELECT * FROM course WHERE course_id = '{$course_id}'");
        $this->lessons = get_all("SELECT * FROM lesson WHERE course_id = '{$course_id}'");
    }
} 