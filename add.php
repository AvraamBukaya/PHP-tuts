<?php
// if (isset($_GET['submit'])) {
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
// }
include 'server.php';
?>


<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php') ?>


<section class="container grey-text">
    <h4 class="center">Add Pizza</h4>
    <form class="white" action="add.php" method="POST">

        <label for="">Your Email:</label>
        <input type="email" name="email" value=<?php echo $email ?>>
        <div class="red-text"><?php echo $errors['email']; ?></div>

        <label for="">Pizza Title</label>
        <input type="text" name="title" value=<?php echo $pizza_title; ?>>
        <div class="red-text"><?php echo $errors['title']; ?></div>


        <label for="">ingredients (comma separated):</label>
        <input type="text" name="ingredients" value=<?php echo $ingredients; ?>>
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">

        </div>

    </form>

</section>




</html>