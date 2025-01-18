<div>
    
    <?php
    if (isset($this->result->errorInfo)) {

        echo '<p class="error p-3">' . $this->result->getMessage() . '</p>';
        ?>
        </div>
        <?php
        exit();
    }

    $page = isset($_GET["page"]) ? '?page=' . $_GET["page"] : '?page=' . 1;

        echo '<div class="blog full">';
        echo '<article class="h-100">';
        echo '<div class="h-100 row justify-content-end me-0 p-4 p-sm-5 g-0">';
        echo '<div class="col-12 order-1">';
        echo '<h2>' . $this->result['postTitle'] . '</h2>';
        echo '<div class="d-flex justify-content-between">';
        echo '<p>Posted on ' . date('jS M Y', strtotime($this->result['postDate'])) . '</p>';
        echo '<img class="mt-3 mb-4 ms-3" width="50" height="50" alt="' .  pathinfo($this->result["filename"], PATHINFO_FILENAME) . '" src="data:' . $this->result["mimetype"] . ';base64,' . base64_encode($this->result['filedata']) . '" >';
        echo '</div>';
        echo '</div>';
        echo '<div class="col-12 col-md-4 d-flex align-items-end order-3 order-md-2">';
        echo '<a href="./' . $page . '">Return to Blog</a>';
        echo '</div>';
        echo '<div class="col-12 col-md-8 d-flex align-items-center order-2 order-md-3 my-3 my-md-0">';
        echo '<p class="w-100 text-end m-0">' . $this->result['postCont'] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</article>';
        echo '</div>';
    ?>

</div>