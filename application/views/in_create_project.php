<div>
    <form action="<?php echo site_url('admin/register_project') ?>" method="post">
        <label for="pj_name">Project Name:</label>
        <input type="text" id="pj_name" name="pj_name"/>
        <label for="website">Project Website:</label>
        <input type="text" id="website" name="website"/>
        <label for="description">Description:</label>
	    <textarea rows='10' cols='20' name='description'>
	    </textarea>

        <label for="people">People:</label>
	    <textarea rows='10' cols='20' name='people'>
	    </textarea>

        <?php for ($num = 0; $num < 3; $num++): ?>
            <label for="news_<?php echo $num + 1 ?>">Title of #<?php echo $num + 1 ?> News:</label>
            <input type="text" id="news_<?php echo $num + 1 ?>" name="news_title[<?php echo $num ?>]">
            <label for="content_<?php echo $num + 1 ?>">Content of #<?php echo $num + 1 ?> News:</label>
            <textarea rows='10' cols='40' name='news[<?php echo $num ?>]'>
		    </textarea>
        <?php endfor ?>

        <?php for ($num = 0; $num < 3; $num++): ?>
            <label for="pub_<?php echo $num + 1 ?>">Title of #<?php echo $num + 1 ?> Publication:</label>
            <input type="text" id="pub_<?php echo $num + 1 ?>" name="pub_title[<?php echo $num ?>]"/>
            <label for="first_author<?php echo $num + 1 ?>">first authors of #<?php echo $num + 1 ?>
                Publication:</label>
            <input type="text" id="first_author<?php echo $num + 1 ?>" name="first_author[<?php echo $num ?>]"/>
            <label for="fellow<?php echo $num  ?>">fellow of Publication
                    <?php echo($num + 1) ?></label>
            <input type="text" id="fellow<?php echo $num  ?>"
                       name="fellow[<?php echo $num ?>]"/>
            <label for="pre_magzine<?php echo $num + 1 ?>">pre_magzine of #<?php echo $num + 1 ?> Publication:</label>
            <textarea rows='10' cols='10' name='pre_magzine[<?php echo $num ?>]'>
		    </textarea>
            <label for="magzine<?php echo $num + 1 ?>">magzine of #<?php echo $num + 1 ?> Publication:</label>
            <textarea rows='10' cols='10' name='magzine[<?php echo $num ?>]'>
		    </textarea>
            <label for="magzine_link_<?php echo $num + 1 ?>">magzine_link of #<?php echo $num + 1 ?>
                Publication:</label>
            <input type="text" id="magzine_link_<?php echo $num + 1 ?>" name="magzine_link[<?php echo $num ?>]"/>
            <label for="link_<?php echo $num + 1 ?>">link of #<?php echo $num + 1 ?> Publication:</label>
            <input type="text" id="link_<?php echo $num + 1 ?>" name="link[<?php echo $num ?>]"/>
            <label for="info_<?php echo $num + 1 ?>">info of #<?php echo $num + 1 ?> Publication:</label>
            <textarea rows='10' cols='10' name='info[<?php echo $num ?>]'>
		    </textarea>
        <?php endfor ?>


        <input type="submit" value="create"/>
    </form>
</div>
