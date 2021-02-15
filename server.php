<?php

if (isset($_POST['submit'])) {

    //Check email
    if (empty($_POST['email'])) {
        echo 'An email is required <br/>';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Email must be a valid email address <br/>';
        }
    }

    //Check pizza title field
    if (empty($_POST['title'])) {
        echo 'A pizza title is required <br/>';
    } else {
        $pizza_title = $_POST['title'];
        if (preg_match('/^[a-zA-Z\s]+$/', $title)) {
            echo 'Title must be letters and spaces only';
        }
    }

    //Check pizza ingredients
    if (empty($_POST['ingredients'])) {
        echo 'At least one  pizza ingredient is required <br/>';
    } else {
        $ingredients = $_POST['ingredients'];
        if (preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            echo 'Ingredients must be a comma seperated list';
        }
    }
} //end of POST check
