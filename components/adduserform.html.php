<div id="wrapper">
    
    <?php echo file_get_contents("../components/menu.html"); ?>

    <p>
        <a href="./?action=users">User Admin Index</a>
    </p>

	<h2>Add User</h2>

    <?php
    if (isset($this->output)) {

        foreach ($this->output as $output) {

            echo '<p class="error">' . $output . '</p>';
        }
    }
    ?>
    
    <form action='?action=adduser' method='post'>

        <p><label>Username</label><br />
        <input type='text' name='username' value='<?php if(isset($this->output)){ echo $_POST['username'];}?>'></p>

        <p><label>Password</label><br />
        <input type='password' name='password' value='<?php if(isset($this->output)){ echo $_POST['password'];}?>'></p>

        <p><label>Confirm Password</label><br />
        <input type='password' name='passwordConfirm' value='<?php if(isset($this->output)){ echo $_POST['passwordConfirm'];}?>'></p>

        <p><label>Email</label><br />
        <input type='text' name='email' value='<?php if(isset($this->output)){ echo $_POST['email'];}?>'></p>

        <p><input type='submit' name='submit' value='Add User'></p>

    </form>

</div>
