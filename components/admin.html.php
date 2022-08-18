<div id="wrapper">
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
            echo "<td>
                    <a href='?id=" . $row['postID'] . "'> Edit </a> 
                    <a href='javascript:delpost(\"" . $row['postID'] . "\",\"" . $row['postTitle'] . "\")'> Delete </a>
                </td>";
            echo '</tr>';

        }
        ?>

    </table>
</div>