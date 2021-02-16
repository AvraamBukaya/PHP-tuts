<?php

// Form variables

$email = $pizza_title = $ingredients = '';

$errors = array('email' => '', 'title' => '', 'ingredients' => '');

if (isset($_POST['submit'])) {

    //Check email
    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required <br/>';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address';
        }
    }

    //Check pizza title field
    if (empty($_POST['title'])) {
        $errors['title'] = 'A pizza title is required';
    } else {
        $pizza_title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $pizza_title)) {
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

    //Check pizza ingredients
    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'At least one  pizza ingredient is required';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'Ingredients must be a comma seperated list';
        }
    }

    if (array_filter($errors)) {
        echo 'Errors in the form';
    } else {
        // echo 'Form is valid';
        header('Location: app.php');
    }
    // Redirect if there is no error
} //end of POST check
