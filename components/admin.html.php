<div class="mt-3" id="wrapper">

    <?php echo file_get_contents("../components/menu.html"); ?>

    <?php 
    if (isset($this->result->errorInfo)) {

        echo $this->result->getMessage() . '<br /><br />';
        ?>
        </div>
        <?php
        exit();
    }
    if (isset($this->output->errorInfo)) { 

        echo $this->output->getMessage() . '<br /><br />';
        ?>
        </div>
        <?php
        exit();
    } else if ($this->output) { 

        echo '<h3 class="m-3 p-3">' . $this->output . '</h3>';  
    }
    if (isset($_GET["error"])) {
    
        echo  $_GET["error"] . '<br /><br />';
        ?>
        </div>
        <?php
        exit(); 
    }
    if (isset($_GET["output"])) {
    
        echo  '<h3 class="m-3 p-3">' . $_GET["output"] . '</h3>'; 
    }
    ?>

    <table>
        <tr>
            <th id="title">Title</th>
            <th id="date">Date</th>
            <th id="action">Action</th>
        </tr>

        <?php
        foreach ($this->result as $row) {

            echo '<tr>';
            echo '<td headers="title">' . $row['postTitle'] . '</td>';
            echo '<td headers="date">' . date('jS M Y', strtotime($row['postDate'])) . '</td>';
            ?>
            <td headers="action">
                <a href="./?action=edit&id=<?php echo $row['postID']; ?>">Edit</a> |
                <a href="javascript:delpost('<?php echo $row['postID']; ?>','<?php echo $row['postTitle']; ?>')">Delete</a>   
            </td>
            <?php
            echo '</tr>';
        }
        ?>
      
    </table>
    
    <a class="text-center p-3" href='./?action=add'>Add Post</a>

</div>