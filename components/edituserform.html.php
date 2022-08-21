<div id="wrapper">

    <?php echo file_get_contents("../components/menu.html"); ?>

    <p>
        <a href="./?action=users">User Admin Index</a>
    </p>

	<h2>Edit User</h2>

    <?php
     if ($this->result->errorInfo) {

        echo $this->result->getMessage() . '<br /><br />';
        ?>
        </div>
        <?php
        exit();
    }
    if (isset($this->output)) {

        foreach ($this->output as $output) {

            echo  $output . '<br />';
        }
    }
    ?>

    <form action= <?php echo '?action=edituser&id=' . $this->result['memberID']; ?> method='post'>

        <input type='hidden' name='memberID' value='<?php echo $this->result['memberID'];?>'>

        <p><label>Username</label><br />
        <input type='text' name='username' value='<?php echo $this->result['username'];?>'></p>

        <p><label>Password (only to change)</label><br />
        <input type='password' name='password' value=''></p>

        <p><label>Confirm Password</label><br />
        <input type='password' name='passwordConfirm' value=''></p>

        <p><label>Email</label><br />
        <input type='text' name='email' value='<?php echo $this->result['email'];?>'></p>

        <p><input type='submit' name='submit' value='Update User'></p>

    </form>

</div>