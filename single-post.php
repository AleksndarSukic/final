<?php include_once "partials/header.php"?>
<?php include_once "connection.php"?>

<script> 
    function myButton() {
        var button = document.getElementById("buttonD");
        var comments = document.getElementById("comments");
        if (button.innerHTML === "Hide comments") {
            button.innerHTML = "Show comments";
            comments.style.display="none";
        } else if(button.innerHTML === "Show comments") {
            button.innerHTML = "Hide comments";
            comments.style.display="block";
        }
    }
</script>

<?php

$sql = "SELECT blogeri.id, blogeri.Title, blogeri.Body, blogeri.Author, blogeri.Created_at, comments.Id AS comment_Id, comments.Author AS comment_Author, comments.Text AS comment_Text, comments.Post_id AS comment_Post_id FROM blogeri LEFT JOIN comments ON blogeri.id=comments.post_Id WHERE blogeri.id =" . $_GET["Post_id"];
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
               <button id="buttonD" type="button" class="btn btn-default" onclick="myButton()">Hide comments</button>
               <div id="comments">
               <ul>
                    <li class="blog-comments-meta"><?php echo ($post["comment_Text"])?></li>
                    <li class="blog-comments-meta"><?php echo ($post["comment_Text"])?></li>
                    <li class="blog-comments-meta"><?php echo ($post["comment_Text"])?></li>
                </ul>
              </div>
           </div>
       </div>
   </div>
</main>


<?php include_once "partials/footer.php"?>

