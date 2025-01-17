<div id="wrapper">

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

    <a class="text-center p-3" href='./?action=adduser'>Add User</a>

    <table>
	<tr>
		<th id="username">Username</th>
		<th id="email">Email</th>
		<th id="action">Action</th>
	</tr>

    <?php
    foreach ($this->result as $row) {

        echo '<tr>';
        echo '<td headers="username">' . $row['username'] . '</td>';
        echo '<td headers="email">' . $row['email'] . '</td>';
        ?>
        <td headers="action">
            <a href="./?action=edituser&id=<?php echo $row['memberID']; ?>">Edit</a>
            <?php if ($row['memberID'] != 1) {?>
                | <a class="deluser" memberID="<?php echo $row['memberID']; ?>" userName="<?php echo $row['username']; ?>">Delete</a>
            <?php }?>
        </td>
        <?php
        echo '</tr>';
    }
    ?>

    </table>

</div>