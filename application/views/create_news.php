<div>
    <h1><?php echo $project['name'] ?></h1>
    <h1>create news</h1>
    <?php $num=$project['num_of_news'] ?>
    <form action="<?php echo site_url('admin/register_news') ?>" method="post">
    	<input type='hidden' value= "<?php echo $project['id'] ?>" name = 'id'/>
    	<label for="title">News Title:</label>
        <input type="text" id="title" name="title"/>
        <br>
        <label for='content'>Content:</label>
        <textarea rows='10' cols='10' name='content'>
        </textarea>
        <br>
        <input type="submit" value="ok"/>
    </form>
</div>