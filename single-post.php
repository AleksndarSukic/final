<?php include_once "partials/header.php"?>
<?php include_once "connection.php"?>

<?php

$sql = "SELECT blogeri.id, blogeri.Title, blogeri.Body, blogeri.Author, blogeri.Created_at, comments.Id AS comments_Id, comments.Author AS comments_Author, comments.Text AS comments_Text, comments.Post_id AS comments_Post_id FROM blogeri, comments WHERE blogeri.id = " . $_GET["Post_id"];
$statement = $connection->prepare($sql);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$post = $statement->fetch();

?>

<main role="main" class="container">
       <div class="row">
       <div class="col-sm-8 blog-main">
           <div class="blog-blogeri">
               <h2 class="blog-blogeri-Title"> <a href = "single-post.php?id=<?php echo($post['id']) ?>"><?php echo ($post["Title"])?> </a></h2>
               <p class="blog-post-meta"><?php echo ($post["Created_at"])?> <a href="#"><?php echo ($post["Author"])?></a></p>
               <p><?php echo ($post["Body"])?></p>
               <div class="comments">
              </div>
           </div>
       </div>
   </div>
</main>

<?php include_once "partials/footer.php"?>
