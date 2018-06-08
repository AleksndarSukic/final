<?php include_once "partials/header.php"?>

<?php include_once "connection.php"?>
  
<?php

$sql = "SELECT Id, Title, Body, Author, Created_at FROM blogeri ORDER BY Created_at";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $posts = $statement->fetchAll();

?>

<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
        <?php
            foreach ($posts as $post) {
        ?>
            <div class="blog-post">
                <article class="pojedinacni">
                    <header>
                        <h1><a href="single-post.php?Post_id=<?php echo($post['Id']) ?>"><?php echo($post['Title']) ?></a></h1>
                        <div class="pojedinacni__meta">5. 9. 2018. by Drago Milicic</div>
                    </header>                        
                    <p> <?php echo($post['Body']) ?> </p>
                </article>
            </div>
            <?php
             }
            ?>
        </div> 
        <?php include_once "partials/sidebar.php"?>
    </div>       
</main>

<?php include_once "partials/footer.php"?>