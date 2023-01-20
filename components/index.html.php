<div id='wrapper'>
    
    <h1>Blog</h1>
    <hr />

    <?php
    if (isset($this->result->errorInfo)) {

        echo $this->result->getMessage();
        ?>
        </div>
        <?php
        exit();
    }

    foreach ($this->result as $row) {

        echo '<div>';
        echo '<h2><a href="?action=viewpost&id=' . $row['postID'] . '">' . $row['postTitle'] . '</a></h2>';
        echo '<p>Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</p>';
        echo '<div>' . $row['postDesc'] . '</div>';
        echo '<p><a href="?action=viewpost&id=' . $row['postID'] . '">Read More</a></p>';
        echo '</div>';
    }
    ?>
    
</div>