<section class="pt-3">
    
    <?php
    if (isset($this->result->errorInfo)) {

        echo $this->result->getMessage();
        ?>
        </div>
        <?php
        exit();
    }

    foreach ($this->result as $row) {

        echo '<article class="mb-3 p-3">';
        echo '<h2><a href="?action=viewpost&id=' . $row['postID'] . '">' . $row['postTitle'] . '</a></h2>';
        echo '<p>Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</p>';
        echo '<p>' . $row['postDesc'] . '</p>';
        echo '<a href="?action=viewpost&id=' . $row['postID'] . '">Read More</a>';
        echo '</article>';
    }
    ?>
    
</section>