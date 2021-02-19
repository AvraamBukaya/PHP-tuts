<?php

// Form variables

$email = $pizza_title = $ingredients = '';

$errors = array('email' => '', 'title' => '', 'ingredients' => '');

if (isset($_GET['submit'])) {

    //Check email
    if (empty($_GET['email'])) {
        $errors['email'] = 'An email is required <br/>';
    } else {
        $email = $_GET['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address';
        }
    }

    //Check pizza title field
    if (empty($_GET['title'])) {
        $errors['title'] = 'A pizza title is required';
    } else {
        $pizza_title = $_GET['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $pizza_title)) {
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

    //Check pizza ingredients
    if (empty($_GET['ingredients'])) {
        $errors['ingredients'] = 'At least one  pizza ingredient is required';
    } else {
        $ingredients = $_GET['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'Ingredients must be a comma seperated list';
        }
    }
} //end of POST check

// connect to database
function connectToDatabase($host, $user_name, $password, $database_name)
{

    //establish connection to mysql database
    $conn = mysqli_connect($host, $user_name, $password, $database_name);

    //Check connection
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }
    return $conn;
}
