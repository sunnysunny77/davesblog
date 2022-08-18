<?php
/**
 * Admin View for admin/index.php
 *
 * @author Daniel Costello
 * @property private $model Holds the Blogposts model
 * @property private $root Holds root directory for the head
 * @property private $title Holds title from the head
 *
 */
class Admin
{

    private $model;
    private $root = "../";
    private $title = "Admin";

    public function __construct($model)
    {

        $this->model = $model;
    }

    public function GetHead()
    {

        include_once "../components/head.html.php";
    }

    public function GetBody()
    {
        
        echo '<div id="wrapper">';
        echo "<table>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>";

            $result = $this->model->GetBlogPosts();

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

        echo "</table>";
        echo "</div>";
    }

    public function GetFoot()
    {

        echo file_get_contents("../components/script.html");
        echo file_get_contents("../components/foot.html");
    }
}
