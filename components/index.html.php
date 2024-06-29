<div class="d-flex flex-wrap pt-3">
    
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
        $page = '&page=' . $_GET["page"];
    }

    foreach ($this->result[isset($_GET["page"]) ? $_GET["page"] - 1 : 0] as $row) {
        
        echo '<article class="mb-3 p-3 d-flex flex-column justify-content-between">';
        echo '<div>';
        echo '<h2><a href="?action=viewpost&id=' . $row['postID'] . '">' . $row['postTitle'] . $page . '</a></h2>';
        echo '<p>Posted on ' . date('jS M Y H:i:s', strtotime($row['postDate'])) . '</p>';
        echo '<img width="50" height="50" alt="' . pathinfo($row["filename"], PATHINFO_FILENAME)  . '" src="data:' . $row["mimetype"] . ';base64,' . base64_encode($row['filedata']) . '" >';
        echo '<p class="p-md-3">' . $row['postDesc'] . '</p>';
        echo '</div>';
        echo '<a href="?action=viewpost&id=' . $row['postID'] . $page . '">Read Article</a>';
        echo '</article>';
    }

    ?>

    <div id="pages">

        page:

        <?php

        for ($i = 1; $i <= count($this->result); $i++) {
            
            $current = "";

            if (isset($_GET["page"]) && $_GET["page"] == $i || !isset($_GET["page"]) && $i == 1) {

                $current = "current";
            }

            if (isset($_GET["page"]) && $i <= $_GET["page"] + 2 && $i >= $_GET["page"] - 2 || !isset($_GET["page"]) && $i <= 3) {

                echo '<a class="' . $current . '" href="' .  $_SERVER['PHP_SELF'] . '?page=' . $i . '">' . $i . '</a>';
            }
        }
        
        ?>

    </div>

</div>
