<?php include_once "connection.php"?>

<?php
$sql = "SELECT Id, Title, Body, Author, Created_at FROM blogeri ORDER BY Created_at";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $posts = $statement->fetchAll();
?>

<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Latest posts</h4>
        <ul>
        <?php foreach ($posts as $post) {         ?>
            <li><a href = "single-post.php?Post_id=<?php echo($post['Id']) ?>"><?php echo($post['Title']) ?></a></li>    
            <?php       }      ?>
        </ul>
    </div>
           
</aside>