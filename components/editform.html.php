<div class="mt-3" id="wrapper">

    <?php echo file_get_contents("../components/menu.html"); ?>

	<h2 class="m-3 p-3">Edit Post</h2>

    <?php
     if (isset($this->result->errorInfo)) {

        echo '<p class="error p-3">' . $this->result->getMessage() . '</p>';
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

    <form action='<?php echo '?action=edit&id=' . $this->result['postID']?>' method='post' enctype="multipart/form-data">

        <input type='hidden' name='postID' value='<?php echo $this->result['postID'];?>'>

        <label>Title
            <input type='text' name='postTitle' value='<?php echo $this->result['postTitle'];?>'>
        </label><br />

        <label>Description
            <textarea name='postDesc' cols='60' rows='10'><?php echo $this->result['postDesc'];?></textarea>
        </label><br />

        <label>Content
            <textarea name='postCont' cols='60' rows='10'><?php echo $this->result['postCont'];?></textarea>
        </label><br />

        <label>Image: <?php echo $this->result['filename'];?>
            <input type="file" name="upload" />
        </label><br />

        <input type='submit' name='submit' value='Update'>

    </form>

</div>