<div id='wrapper'>
    
    <h1>Blog</h1>
    <hr />

    <p>
        <a href='./'>Blog Index</a>
    </p>

    <?php
    if ($this->result->errorInfo) {

        echo  $this->result->getMessage();
        ?>
        </div>
        <?php
        exit();
    }
    ?>

    <div> 
        <h1> <?php echo $this->result['postTitle'] ?> </h1>
        <p>Posted on <?php echo date('jS M Y', strtotime($this->result['postDate'])) ?> </p>
        <p> <?php echo $this->result['postCont'] ?> </p>
    </div>
    
</div>