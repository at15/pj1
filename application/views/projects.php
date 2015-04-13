<body data-spy="scroll" data-target=".sidenav">
<div id="msbnav" class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="http://web.eecs.umich.edu/~mozafari/">Barzan Mozafari</a><span class="brand"
                                                                                                  style="padding-left: 0px; padding-right: 0px;">&nbsp;·&nbsp;</span><a
                class="brand" href="http://umich.edu/">University Of Michigan</a><span class="brand"
                                                                                       style="padding-left: 0px; padding-right: 0px;">&nbsp;·&nbsp;</span><a
                class="brand" href="http://www.eecs.umich.edu/db/">Database Systems</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="span9">
            <h1>Current Projects</h1>
            <?php
            $cur_projects = $this->db->select('*')->from('projects')->where('status', 'current')->order_by('order')->get()->result_array();
            ?>
            <ul>
                <?php foreach ($cur_projects as $num => $project) : ?>
                    <li><a href=< "<?php echo $project['website'] ?>"><b><?php echo $project['name'] ?>
                            </b> <?php echo $project['summary'] ?> </a></li>
                <?php endforeach ?>
            </ul>
            <h1>Past Projects</h1>
            <?php
            $past_projects = $this->db->select('*')->from('projects')->where('status', 'past')->get()->result_array();
            ?>
            <ul>
                <?php foreach ($past_projects as $num => $project) : ?>
                    <li><a href=< "<?php echo $project['website'] ?>"><b><?php echo $project['name'] ?>
                            </b> <?php echo $project['summary'] ?> </a></li>
                <?php endforeach ?>
            </ul>
            <?php
            $all_projects = $this->db->select('*')->from('projects')->get()->result_array();
            ?>
            <?php foreach ($all_projects as $num => $project) : ?>
                <h2>
                    <p style="line-height: 200%;">
                        <a name="<?php echo $project['name'] ?>"> <b><font size="6" face="Arial"></font></b></a><b><font
                                size="6" face="Arial"><a
                                    href="<?php echo $project['website'] ?>"><?php echo $project['name'] ?></a></font></b>
                    </p>
                </h2>
                <br>
                <?php $id = $project['id']; ?>
                <?php $people = $this->db->select('*')->from('people')->where('pj_id', $id)->get()->result_array() ?>
                <?php if (!empty($people[0]['name']) ) :?> 
                    <p><b><font size="2" face="Arial">People:</font></b>
                    <?php echo $people[0]['name']; ?>
                <?php endif?>
                </p>
                <p>
                    <?php echo $project['description'] ?>
                </p>
                <p>
                    <?php $id = $project['id'];
                    $news = $this->db->select('*')->from('description')->where('pj_id', $id)->get()->result_array();
                    foreach ($news as $new):
                        ?>
                        <font color="red"><b><?php echo $new['title']?></b></font>
                        <br>
                        <?php echo $new['content'] ?>
                        <br>
                    <?php endforeach ?>
                </p>
                
                <?php $id = $project['id'];
                $publications = $this->db->select('*')->from('publication')->where('pj_id', $id)->get()->result_array();?>
                <?php if (!empty($publications[0]['id'])) :?>
                <p><b><font size="3" face="Arial">Publications:</font></b></p>
                <?php foreach ($publications as $publication): ?>
                    <li>
                        <p style="margin-left: 4px; margin-top: 20px; margin-bottom: 20px;">
                            <b><?php echo $publication['first_author'] ?></b>
                            <?php echo $publication['fellow']?>

                            <a href="<?php echo $publication['link']?>"><?php echo $publication['title']?>
                            </a>. <?php echo $publication['pre_magzine']?><i></i>
                            <a href="<?php echo $publication['magzine_link']?>">(<?php echo $publication['magzine']?>
                                )</a>,
                            <?php echo $publication['info']?>
                        </p></li>
                <?php endforeach ?>
                <?php endif ?>
            <?php endforeach ?>

            </i></i></div>
        <i><i> <!-- /row -->
            </i></i></div>
    <i><i> <!-- /container -->


        </i></i></div>