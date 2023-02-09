<div class="mt-3" id="wrapper">

    <?php echo file_get_contents("../components/menu.html"); ?>

	<h2 class="m-3 p-3">Add Post</h2>

    <?php
    if ($this->output) {

        foreach ($this->output as $output) {

            echo '<p class="error">' . $output . '</p>';
        }
    }
    ?>

    <form action='?action=add' method='post'  enctype="multipart/form-data">

        <label>Title
            <input type='text' name='postTitle' value='<?php if ($this->output) {echo $_POST['postTitle'];}?>'>
        </label><br />

        <label>Description
            <textarea name='postDesc' cols='60' rows='10'><?php if ($this->output) {echo $_POST['postDesc'];}?></textarea>
        </label><br />

        <label>Content
            <textarea name='postCont' cols='60' rows='10'><?php if ($this->output) {echo $_POST['postCont'];}?></textarea>
        </label><br />

        <label>Image: 
            <input type="file" name="upload">
        </label><br />

        <input type='submit' name='submit' value='Submit'>

    </form>

</div>