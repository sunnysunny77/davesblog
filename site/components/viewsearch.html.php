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
    
        echo  '<h3 class="m-3 p-3">Lost in space.. <br><br> No posts found </h3>';
        exit(); 
    }

    $count = count($this->result) - 1;

    for ($index = 0; $index <= $count; $index++) {

        foreach ($this->result[$index] as $row) {
            
            echo '<div class="blog">';
            echo '<article class="p-3 d-flex flex-column justify-content-between">';
            echo '<div>';
            echo '<h2><a href="?action=viewpost&id=' . $row['postID'] . '">' . $row['postTitle'] . '</a></h2>';
            echo '<p>Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</p>';
            echo '<img width="50" height="50" alt="' . pathinfo($row["filename"], PATHINFO_FILENAME)  . '" src="data:' . $row["mimetype"] . ';base64,' . base64_encode($row['filedata']) . '" >';
            echo '<p class="p-md-3">' . $row['postDesc'] . '</p>';
            echo '</div>';
            echo '<a href="?action=viewpost&id=' . $row['postID'] . '">Read Article</a>';
            echo '</article>';
            echo '</div>';

        }

    }

    ?>
    
</div>