<section class="row pt-3 g-0">
    
    <?php
    if (isset($this->result->errorInfo)) {

        echo '<p class="error p-3">' . $this->result->getMessage() . '</p>';
        ?>
        </div>
        <?php
        exit();
    }
    ?>

    <article class="col-12 p-3 me-0"> 
        <h2> <?php echo $this->result['postTitle'] ?> </h2>
        <p>Posted on <?php echo date('jS M Y', strtotime($this->result['postDate'])) ?> </p>
        <p class="p-md-3"> <?php echo $this->result['postCont'] ?> </p>
    </article>
    
</section>