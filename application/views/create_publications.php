<div>
    <h1><?php echo $project['name'] ?></h1>

    <h1>create publications</h1>
    <?php $num=$project['num_of_publications'] ?>
    <form action="<?php echo site_url('admin/register_publications') ?>" method="post">
    	<input type='hidden' value= "<?php echo $project['id'] ?>" name = 'id' ?>/>
        <label for="title">Publication Title:</label>
        <input type="text" id="title" name="title"/>
        <label for="link">Website:</label>
        <input type="text" id="link" name="link"/>
        <label for="magzine">Magzine:</label>
        <input type="text" id="magzine" name="magzine"/>
        <label for="magzine_link">Magzine website:</label>
        <input type="text" id="magzine_link" name="magzine_link"/>
        <label for="author">First Author:</label>
        <input type="text" id="author" name="author"/>
        <label for="fellow">Fellow:</label>
        <input type="text" id="fellow" name="fellow"/>
        <label for="pre_magzine">Infomation Between Magzine:</label>
        <input type="text" id="pre_magzine" name="pre_magzine"/>
        <label for="info">Infomation After Magzine:</label>
        <input type="text" id="info" name="info"/>
        <br>
        <input type="submit" value="ok"/>
    </form>
</div>