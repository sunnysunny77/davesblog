<div id='wrapper'>
    
    <h1>Blog</h1>
    <hr />

    <?php
   
    if ($this->result->errorInfo) {

        echo '<h2>' . $this->result->getMessage() . '</h2>';
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
        <h1> <?php echo $this->result['postTitle'] ?> </h1>
        <p>Posted on <?php echo date('jS M Y', strtotime($this->result['postDate'])) ?> </p>
        <p> <?php echo $this->result['postCont'] ?> </p>
    </div>
    
</div>