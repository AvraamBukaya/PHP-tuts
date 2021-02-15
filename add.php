<?php
// if (isset($_GET['submit'])) {
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
// }

?>


<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php') ?>


<section class="container grey-text">
    <h4 class="center">Add Pizza</h4>
    <form class="white" action="server.php" method="POST">

        <label for="">Your Email:</label>
        <input type="email" name="email">
        <label for="">Pizza Title</label>
        <input type="text" name="title">
        <label for="">ingredients (comma separated):</label>
        <input type="text" name="ingredients">

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">

        </div>

    </form>

</section>




</html>