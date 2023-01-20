<div id='wrapper'>
    
    <h1>Blog</h1>
    <hr />

    <p>
        <a href='./'>Blog Index</a>
    </p>

    <?php
    if (isset($this->result->errorInfo)) {

        echo $this->result->getMessage();
        ?>
        </div>
        <?php
        exit();
    }
    ?>

    <div> 
        <h2> <?php echo $this->result['postTitle'] ?> </h2>
        <p>Posted on <?php echo date('jS M Y', strtotime($this->result['postDate'])) ?> </p>
        <div> <?php echo $this->result['postCont'] ?> </div>
    </div>
    
</div>