<div class="mt-3" id="wrapper">

    <?php echo file_get_contents("../components/menu.html"); ?>

    <?php 
    if (isset($this->result->errorInfo)) {

        echo '<p class="error p-3">' . $this->result->getMessage() . '</p>';
        ?>
        </div>
        <?php
        exit();
    }
    if (isset($this->output->errorInfo)) { 

        echo '<p class="error p-3">' . $this->result->getMessage() . '</p>';
        ?>
        </div>
        <?php
        exit();
    } else if ($this->output) { 

        echo '<h3 class="m-3 p-3">' . $this->output . '</h3>';  
    }
    if (isset($_GET["error"])) {
    
        echo '<p class="error p-3">' . $_GET["error"] . '</p>';
        ?>
        </div>
        <?php
        exit(); 
    }
    if (isset($_GET["output"])) {
    
        echo  '<h3 class="m-3 p-3">' . $_GET["output"] . '</h3>'; 
    }
    ?>

    <a class="text-center p-3" href='./?action=add'>Add Post</a>

    <table>
        <tr>
            <th id="title">Title</th>
            <th id="date">Date</th>
            <th id="action">Action</th>
        </tr>

        <?php
        foreach ($this->result[isset($_GET["page"]) ? $_GET["page"] - 1 : 0] as $row) {

            echo '<tr>';
            echo '<td headers="title">' . $row['postTitle'] . '</td>';
            echo '<td headers="date">' . date('jS M Y', strtotime($row['postDate'])) . '</td>';
            ?>
            <td headers="action">
                <a href="./?action=edit&id=<?php echo $row['postID']; ?>">Edit</a> |
                <a id="delpost" postID="<?php echo $row['postID']; ?>" postTitle="<?php echo $row['postTitle']; ?>" >Delete</a>   
            </td>
            <?php
            echo '</tr>';
        }
        ?>
      
    </table>

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

    <br>

</div>
