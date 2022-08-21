<div id="wrapper">

    <?php echo file_get_contents("../components/menu.html"); ?>

    <?php 
    if ($this->result->errorInfo) {

        echo $this->result->getMessage() . '<br /><br />';
        ?>
        </div>
        <?php
        exit();
    }
    if ($this->output->errorInfo) { 

        echo $this->output->getMessage() . '<br /><br />';
        ?>
        </div>
        <?php
        exit();
    } else if ($this->output) { 

        echo '<h3>' . $this->output . '</h3>';  
    }
    if (isset($_GET["error"])) {
    
        echo  $_GET["error"] . '<br /><br />';
        ?>
        </div>
        <?php
        exit(); 
    }
    if (isset($_GET["output"])) {
    
        echo  '<h3>' . $_GET["output"] . '</h3>'; 
    }
    ?>

    <table>
        <tr>
            <th>Title</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php
        foreach ($this->result as $row) {

            echo '<tr>';
            echo '<td>' . $row['postTitle'] . '</td>';
            echo '<td>' . date('jS M Y', strtotime($row['postDate'])) . '</td>';
            ?>
            <td>
                <a href="./?action=edit&id=<?php echo $row['postID']; ?>">Edit</a> |
                <a href="javascript:delpost('<?php echo $row['postID']; ?>','<?php echo $row['postTitle']; ?>')">Delete</a>   
            </td>
            <?php
            echo '</tr>';
        }
        ?>
      
    </table>

    <p>
        <a href='./?action=add'>Add Post</a>
    </p>

</div>