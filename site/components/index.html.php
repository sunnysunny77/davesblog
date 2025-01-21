<div class="d-flex flex-wrap justify-content-between">
    
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

    $width = "";

    foreach ($this->result[isset($_GET["page"]) ? $_GET["page"] - 1 : 0] as $key => $row) {
        
        if ($key % 5 === 0) {

            $width = "full";
        } else {
            
            $width = "half";
        }

        echo "<div class='blog $width'>";
        echo '<article class="h-100">';
        echo '<div class="h-100 row justify-content-end p-4 p-sm-5 g-0">';
        echo '<div class="col-12 order-1">';
        echo '<h2><a href="?action=viewpost' . $this->page . '&id=' . $row['postID'] . '">' . $row['postTitle'] . '</a></h2>';
        echo '<div class="d-flex justify-content-between">';
        echo '<p>Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</p>';
        echo '<img class="mt-3 mb-4 ms-3" width="50" height="50" alt="' . pathinfo($row["filename"], PATHINFO_FILENAME)  . '" src="data:' . $row["mimetype"] . ';base64,' . base64_encode($row['filedata']) . '" >'; 
        echo '</div>';
        echo '</div>';
        echo '<div class="col-12 col-lg-4 d-flex flex-row align-items-end order-3 order-lg-2 mt-2 mt-lg-0">';
        echo '<a href="?action=viewpost' .  $this->page . '&id=' . $row['postID'] . '">Read Article</a>';
        echo '</div>';
        echo '<div class="col-10 col-lg-8 d-flex align-items-center order-2 order-lg-3">';
        echo '<p class="w-100 text-end m-0">' . $row['postDesc'] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</article>';
        echo '</div>';
    }

    ?>
    
</div>