<?php include_once "connection.php"?>

<?php
   if (isset($_POST["submit"])) {
       if (empty($_POST["name"]) || empty($_POST["comment"])) {
           header('Location: ../single-post.php?post_id='.$_POST['Post_Id'].'&error=1');
       } else {
           $postId = $_POST['Post_Id'];
           $comment = "INSERT INTO comments (Id, Author, Text, Post_id) VALUES (100, 'Drago', 'nikako', '$Post_Id')";
           $statement = $connection->prepare($comment);
           $statement->execute();

           header('Location: ../single-post.php?post_id='.$_POST['Post_Id']);

       }
   }          
?>