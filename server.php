<?php
require 'config/db_connect.php';
// Form variables

$email = $pizza_title = $ingredients = '';
$flag = true;

$errors = array('email' => '', 'title' => '', 'ingredients' => '');


function validationFields()
{
    // access to override global variables 
    global $errors, $email, $pizza_title, $ingredients, $flag;

    if (isset($_GET['submit'])) {

        //Check email
        if (empty($_GET['email'])) {
            $errors['email'] = 'An email is required <br/>';
            $flag = false;
        } else {
            $email = $_GET['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email must be a valid email address';
                $flag = false;
            }
        }

        //Check pizza title field
        if (empty($_GET['title'])) {
            $errors['title'] = 'A pizza title is required';
            $flag = false;
        } else {
            $pizza_title = $_GET['title'];
            if (!preg_match('/^[a-zA-Z\s]+$/', $pizza_title)) {
                $errors['title'] = 'Title must be letters and spaces only';
                $flag = false;
            }
        }

        //Check pizza ingredients
        if (empty($_GET['ingredients'])) {
            $errors['ingredients'] = 'At least one  pizza ingredient is required';
            $flag = false;
        } else {
            $ingredients = $_GET['ingredients'];
            if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
                $errors['ingredients'] = 'Ingredients must be a comma seperated list';
                $flag = false;
            }
        }
    } else {
        $flag = false;
    }
    return  $flag;
} //end of GET check

$responseFromValidation = validationFields();

if ($responseFromValidation) {
    // if (array_filter($errors)) {
    //     //echo 'errors in the form';
    global $email, $title, $ingredients;

    $email = mysqli_real_escape_string($connectionToDatabase, $_GET['email']);
    $title = mysqli_real_escape_string($connectionToDatabase, $_GET['title']);
    $ingredients = mysqli_real_escape_string($connectionToDatabase, $_GET['ingredients']);

    //Create sql
    $sql = "INSERT INTO pizza (email,title,ingredients) VALUES ('$email', '$title', '$ingredients')";

    // save to DB and check
    if (mysqli_query($connectionToDatabase, $sql)) {
        //succes
        header('Location: app.php');
    } else {
        // error
        echo 'query error: ' . mysqli_error($connectionToDatabase);
    }
} else {
    validationFields();
}
