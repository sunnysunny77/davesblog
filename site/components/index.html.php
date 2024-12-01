<div class="d-flex flex-wrap pt-3">
    
    <?php
    
    if (isset($this->result->errorInfo)) {

        echo '<p class="error p-3">' . $this->result->getMessage() . '</p>';
        ?>
        </div>
        <?php
        exit();
    }
    if ($this->result === false) {
    
        echo  '<h3 class="m-3 p-3"> No posts yet </h3>';
        exit(); 
    }

    $page = isset($_GET["page"]) ? '&page=' . $_GET["page"] : '&page=' . 1;

    foreach ($this->result[isset($_GET["page"]) ? $_GET["page"] - 1 : 0] as $row) {
        
        echo '<article class="row justify-content-end mb-3 p-5 g-0">';
        echo '<div class="col-12 order-1">';
        echo '<h2><a href="?action=viewpost' . $page . '&id=' . $row['postID'] . '">' . $row['postTitle'] . '</a></h2>';
        echo '<p>Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</p>';
        echo '</div>';
        echo '<div class="col-12 col-md-4 d-flex flex-row flex-md-column align-items-end align-items-md-start justify-content-between justify-content-md-end order-3 order-md-2">';
        echo '<img class="mb-md-3" width="50" height="50" alt="' . pathinfo($row["filename"], PATHINFO_FILENAME)  . '" src="data:' . $row["mimetype"] . ';base64,' . base64_encode($row['filedata']) . '" >';
        echo '<a href="?action=viewpost' . $page . '&id=' . $row['postID'] . '">Read Article</a>';
        echo '</div>';
        echo '<div class="col-10 col-md-8 d-flex align-items-center order-2 order-md-3">';
        echo '<p class="w-100 text-end m-0">' . $row['postDesc'] . '</p>';
        echo '</div>';
        echo '</article>';
    }

    ?>
    
</div>