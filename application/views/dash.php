<div>
    <h1>Administrator</h1>

    <form action="<?php echo site_url('admin/create_project') ?>" method="post">
        <input type="submit" value="create_project">
    </form>
</div>
<form action="<?php echo site_url('admin/delete_project') ?>" method="post">
    <select name='pj_id'>
        <?php foreach ($projects as $project): ?>
            <option value="<?php echo $project['id'] ?>"> <?php echo $project['name'] ?> </option>
        <?php endforeach ?>
        <select>
            <input type="submit" value="delete project">
</form>

<form action="<?php echo site_url('admin/update_project') ?>" method="post">
    <select name='pj_id'>
        <?php foreach ($projects as $project): ?>
            <option value='<?php echo $project["id"] ?>'> <?php echo $project['name'] ?> </option>
        <?php endforeach ?>
        <select>
            <input type="submit" value="update project">
</form>
</div>

<div>
    <form action="<?php echo site_url('admin/initial') ?>" method="post">
        <input type="submit" value="initialize the original webpage">
    </form>
</div>
</div>

<div>
    <form action="<?php echo site_url('admin/delete_all') ?>" method="post">
        <input type="submit" value="clear the database">
    </form>
</div>
</div>