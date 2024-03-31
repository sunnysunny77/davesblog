<div class="row pt-3 g-0">
    
    <?php
    if (isset($this->result->errorInfo)) {

        echo '<p class="error p-3">' . $this->result->getMessage() . '</p>';
        ?>
        </div>
        <?php
        exit();
    }

    $page = '';

    if (isset($_GET["page"])) {
        $page = '?&page=' . $_GET["page"];
    }


        echo '<article class="col-12 p-3 me-0">';
        echo '<h2>' . $this->result['postTitle'] . '</h2>';
        echo '<p>Posted on ' . date('jS M Y', strtotime($this->result['postDate'])) . '</p>';
        echo '<img width="50" height="50" alt="' .  pathinfo($this->result["filename"], PATHINFO_FILENAME) . '" src="data:' . $this->result["mimetype"] . ';base64,' . base64_encode($this->result['filedata']) . '" >';
        echo '<p class="p-md-3">' . $this->result['postCont'] . '</p>';
        echo '<a href="./' . $page . '">Return to Blog</a>';
        echo '</article>';
    ?>

</div>