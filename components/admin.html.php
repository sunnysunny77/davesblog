<div id="wrapper">

    <?php echo file_get_contents("../components/menu.html"); ?>

    <?php 
    if ($result->errorInfo) {

        echo '<h3>' . $result->getMessage() . '</h3>';
        ?>
        </div>
        <?php
        exit();
    }
    ?>

    <?php 
    if ($this->message) {
    
        echo  '<h3>' . $this->message . '</h3>'; 
    }
    ?>

    <table>
        <tr>
            <th>Title</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php
        foreach ($result as $row) {

            echo '<tr>';
            echo '<td>' . $row['postTitle'] . '</td>';
            echo '<td>' . date('jS M Y', strtotime($row['postDate'])) . '</td>';
            echo '<td>
                    <a href="./?action=edit&id=' . $row['postID'] . '"> Edit </a> 
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