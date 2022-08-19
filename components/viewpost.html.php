<div id='wrapper'>
    
    <h1>Blog</h1>
    <hr />

    <?php
   
    if ($result->errorInfo) {

        echo '<h3>' . $result->getMessage() . '</h3>';
        ?>
        </div>
        <?php
        header("Refresh:5; url=./");
        exit();
    }
    ?>

    <p>
        <a href='./'>Blog Index</a>
    </p>

    <div> 
        <h1> <?php echo $result['postTitle'] ?> </h1>
        <p>Posted on <?php echo date('jS M Y', strtotime($result['postDate'])) ?> </p>
        <p> <?php echo $result['postCont'] ?> </p>
    </div>
    
</div>