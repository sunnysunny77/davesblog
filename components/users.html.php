<div id="wrapper">

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
                | <a href="javascript:deluser('<?php echo $row['memberID']; ?>','<?php echo $row['username']; ?>')">Delete</a>
            <?php }?>
        </td>
        <?php
        echo '</tr>';
    }
    ?>

    </table>

    <p><a href='./?action=adduser'>Add User</a></p>

</div>