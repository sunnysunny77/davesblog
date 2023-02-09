<div class="mt-3" id="wrapper">

    <?php echo file_get_contents("../components/menu.html"); ?>

	<h2 class="m-3 p-3">Edit User</h2>

    <?php
     if (isset($this->result->errorInfo)) {

        echo '<p class="error p-3">' . $this->result->getMessage() 
        ?>
        </div>
        <?php
        exit();
    }
    if ($this->output) {

        foreach ($this->output as $output) {

            echo '<p class="error p-3">' . $output . '</p>';
        }
    }
    ?>

    <form action= <?php echo '?action=edituser&id=' . $this->result['memberID']; ?> method='post'>

        <input type='hidden' name='memberID' value='<?php echo $this->result['memberID'];?>'>

        <label>Username
            <input type='text' name='username' value='<?php echo $this->result['username'];?>'>
        </label><br />

        <label>Password (only to change)
            <input type='password' name='password' value=''>
        </label><br />

        <label>Confirm Password
            <input type='password' name='passwordConfirm' value=''>
        </label><br />

        <label>Email
            <input type='text' name='email' value='<?php echo $this->result['email'];?>'>
        </label><br />

        <input class="btn" type="submit"  name='submit' value="Update User">

    </form>

</div>