<div>
    <?php
    $project = $this->db->select('*')->from('projects')->where('id', $transfer_id)->get()->result_array();
    $people = $this->db->select('*')->from('people')->where('pj_id', $transfer_id)->get()->result_array();
    $description = $this->db->select('*')->from('description')->where('pj_id', $transfer_id)->get()->result_array();
    $publication = $this->db->select('*')->from('publication')->where('pj_id', $transfer_id)->get()->result_array();
    ?>
    <form action="<?php echo site_url('admin/create_news') ?>" method="post">
    	  <input type='hidden' value= <?php echo $transfer_id ?> name = 'transfer_id'/>
    	  <input type="submit" value="create news"/>
   	</form>
   	<form action="<?php echo site_url('admin/create_publication') ?>" method="post">
    	  <input type='hidden' value= <?php echo $transfer_id ?> name = 'transfer_id'/>
    	  <input type="submit" value="create a publication"/>
   	</form>
    <form action="<?php echo site_url('admin/register_2_project') ?>" method="post">
        <input type='hidden' value= <?php echo $transfer_id ?> name = 'transfer_id'/>
        <label for="pj_name">Project Name:</label>
        <input type="text" id="pj_name" name="pj_name" value= "<?php echo $project[0]['name'] ?> "/>
        <label for="website">Project Website:</label>
 		<textarea rows='10' cols='10' name='website'>
	    	<?php echo $project[0]['website'] ?>
	    </textarea>        
	    <label for="description">Description:</label>
	    <textarea rows='10' cols='20' name='description'>
	    	<?php echo $project[0]['description'] ?>
	    </textarea>

        <label for="people">People:</label>
	    <textarea rows='10' cols='20' name='people'>
	    	<?php foreach ($people as $person) : ?>
                <?php echo $person['name'] ?>
            <?php endforeach ?>
	    </textarea>

        <?php foreach ($description as $num => $des): ?>
            <label for="news_<?php echo $num + 1 ?>">Title of #<?php echo $num + 1 ?> News:</label>
            <input type="text" id="news_<?php echo $num + 1 ?>" name="news_title[<?php echo $num ?>]" value=
            "<?php echo $des['title'] ?> "/>
            <label for="content_<?php echo $num + 1 ?>">Content of #<?php echo $num + 1 ?> News:</label>
            <textarea rows='10' cols='40' name='news[<?php echo $num ?>]'>
		    	<?php echo $des['content'] ?>
		    </textarea>
        <?php endforeach ?>

        <?php foreach ($publication as $num => $pub): ?>
            <?php $publication_id = $pub['id'] ?>
            <label for="pub_<?php echo $num + 1 ?>">Title and Website of #<?php echo $num + 1 ?> Publication:</label>
            <input type="text" id="pub_<?php echo $num + 1 ?>" name="pub_title[<?php echo $num ?>]" value=
                "<?php echo $pub['title'] ?>"/>
            <input type="text" id="pub_<?php echo $num + 1 ?>" name="link[<?php echo $num ?>]" value=
                "<?php echo $pub['link'] ?>" />
            <label for="first_author<?php echo $num + 1 ?>">first authors of #<?php echo $num + 1 ?>
                Publication:</label>
            <input type="text" id="first_author<?php echo $num + 1 ?>" name="first_author[<?php echo $num ?>]" value="<?php echo $pub['first_author']?>"/>
            <label for="fellow<?php echo($num) ?>">fellow of Publication <?php echo($num + 1) ?></label>
            <input type="text" id="fellow<?php echo($num) ?>" name="fellow[<?php echo $num ?>]" value = "<?php echo $pub['fellow'] ?>"/>
            <label for="magzine<?php echo $num + 1 ?>">pre_magzine, magzine, magzine website and other info. of  #<?php echo $num + 1 ?> Publication:</label>
            <textarea rows='10' cols='10' name='magzine[<?php echo $num ?>]'>
		    	<?php echo $pub['pre_magzine'] ?>
		    </textarea>
            <textarea rows='10' cols='10' name='magzine[<?php echo $num ?>]'>
		    	<?php echo $pub['magzine'] ?>
		    </textarea>
            <input type="text" id="pub_<?php echo $num + 1 ?>" name="magzine_link[<?php echo $num ?>]" value=
                "<?php echo $pub['magzine_link'] ?> "/>
            
            <textarea rows='10' cols='10' name='info[<?php echo $num ?>]'>
		    	<?php echo $pub['info'] ?>
		    </textarea>
        <?php endforeach ?>

        <input type="submit" value="create"/>
    </form>
</div>
