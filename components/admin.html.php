<div id="wrapper">

    <?php echo file_get_contents("../components/menu.html"); ?>

    <?php 
    if ($this->result->errorInfo) {

        echo $this->result->getMessage() . '<br /><br />';
    }
    if ($this->output->errorInfo) { 

        echo $this->output->getMessage() . '<br /><br />';
    } else if ($this->output) { 

        echo '<h3>' . $this->output . '</h3>';  
    }
    if (isset($_GET["error"])) {
    
        echo  $_GET["error"] . '<br /><br />'; 
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
            echo '<td>
                    <a href="./?action=edit&id=' . $row['postID'] . '"> Edit </a> |
                    <a href="javascript:delpost(`' . $row['postID'] . '`,`' . $row['postTitle'] . '`)"> Delete </a>
                </td>';
            echo '</tr>';

        }
        ?>

    </table>

    <p>
        <a href='./?action=add'>Add Post</a>
    </p>

</div>