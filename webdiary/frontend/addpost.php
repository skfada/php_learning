<?php
$title = "New Post";

require_once "../includes/header.php";


?>

<h3>Welcome to Add Post page</h3>


<form action="../backend/addpost_server.php" method="post">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="title" id="title" rows="3" placeholder="Write the title here">
        <label for="title">Title of the post</label>
    </div>

    <div class="form-floating mb-3">
        <textarea  class="h-100 form-control" name="content" id="content" rows="3" placeholder="Write Content Here"></textarea>
        <label for="content">Write content here</label>
    </div>

    <input class="btn btn-outline-primary" type="submit" value="Publish Post">


</form>
















<?php
require_once "../includes/footer.php";
?>