<?php include_once "partials/header.php"?>

<?php include_once "connection.php"?>
    
    <?php

    
    
$sql = "SELECT Id, Title, Created_at, Author, Body FROM blogeri ORDER BY Created_at";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $posts = $statement->fetchAll();


?>

<?php
    foreach ($posts as $post) {
?>
<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <article class="va-c-article">
                    <header>
                        <h1><a href="single-post.php?Post_id=<?php echo($post['Id']) ?>"><?php echo($post['Title']) ?></a></h1>
                        <div class="va-c-article__meta">12. 6. 2017. by John Doe</div>
                    </header>
            <div>
                        
                        <p> <?php echo($post['Body']) ?> </p>
            </div>
                </article>
        </div>    
    </div>        
</main>

<?php
    }
?>


<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <a  href="single-post.php"><h2 class="blog-post-title">Sample blog post</h2></a>
                <a href="#">January 1, 2014 by <p class="blog-post-meta">Mark</p></a>
            
                <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                <hr>
                <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                <blockquote>
                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </blockquote>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>     
            <div class="blog-post"> 
                <a href="#" ><h2 class="blog-post-title">Another blog post</h2></a>
                <a href="#" >December 23, 2013 by <p class="blog-post-meta">Jacob</p></a>
                <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                <blockquote>
                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </blockquote>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            </div><!-- /.blog-post -->
            <div class="blog-post">
                <a href="#" ><h2 class="blog-post-title">New feature</h2></a>
                <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <ul>
                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                    <li>Donec id elit non mi porta gravida at eget metus.</li>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                </ul>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            </div><!-- /.blog-post -->
            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>
        </div><!-- /.blog-main -->
        <?php include_once "partials/sidebar.php"?>
    </div><!-- /.row -->
</main><!-- /.container -->
<?php include_once "partials/footer.php"?>