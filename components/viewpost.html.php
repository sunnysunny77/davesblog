<section class="row pt-3 g-0">
    
    <?php
    if (isset($this->result->errorInfo)) {

        echo $this->result->getMessage();
        ?>
        </div>
        <?php
        exit();
    }
    ?>

    <article class="col-12 p-3 me-0"> 
        <h2> <?php echo $this->result['postTitle'] ?> </h2>
        <p>Posted on <?php echo date('jS M Y', strtotime($this->result['postDate'])) ?> </p>
        <p> <?php echo $this->result['postCont'] ?> </p>
    </article>
    
</section>