<div class="d-flex flex-wrap pt-3">
    
    <?php
    
    if (isset($this->result->errorInfo)) {

        echo '<p class="error p-3">' . $this->result->getMessage() . '</p>';
        ?>
        </div>
        <?php
        exit();
    }


    foreach ($this->result[isset($_GET["page"]) ? $_GET["page"] : 0] as $row) {
        
        echo '<article class="mb-3 p-3">';
        echo '<h2><a href="?action=viewpost&id=' . $row['postID'] . '">' . $row['postTitle'] . '</a></h2>';
        echo '<div>';
        echo '<p>Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</p>';
        echo '<img width="50" height="50" alt="' . pathinfo($row["filename"], PATHINFO_FILENAME)  . '" src="data:' . $row["mimetype"] . ';base64,' . base64_encode($row['filedata']) . '" >';
        echo '<p class="p-md-3">' . $row['postDesc'] . '</p>';
        echo '<a href="?action=viewpost&id=' . $row['postID'] . '">Read Article</a>';
        echo '</div>';
        echo '</article>';
    }
    ?>

    <div class="pages">

        page:

        <?php
        for ($i = 0; $i < count($this->result); $i++) {
            
            $page = $i + 1;

            if (isset($_GET["page"]) && $_GET["page"] == $i || !isset($_GET["page"]) && $i == 0) {

                $current = "current";
            } else {

                $current = "";
            }

            echo '<a class="' . $current . '" href="' .  $_SERVER['PHP_SELF'] . '?page=' . $i . '">' . $page . '</a>';
        }
        ?>

    </div>

</div>
