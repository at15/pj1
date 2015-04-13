<?php

/**
 * Created by PhpStorm.
 * User: gust
 * Date: 4/8/15
 * Time: 9:39 PM
 */

/**
 * Class Admin
 *
 * @property CI_Input input
 * @property user_lib user_lib
 */
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_lib');
        $this->load->model('project_model');
        $this->load->model('Initial');
    }

    public function index()
    {
        $this->login();
    }

    public function delete_all()
    {
        $all = $this->project_model->get_all_projects();
        $num = count($all);
        for ($i = 0; $i < $num; $i++) {
            $this->project_model->delete_project($all[$i]['id']);
        }
                $this->dash();

    }

    public function login()
    {
//        var_dump($_POST);
        $user_name = $this->input->post('user_name');
        $password = $this->input->post('password');
        if (!$this->user_lib->login($user_name, $password)) {
            // show login page
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        } else {
            redirect(site_url('admin/dash'));
        }
    }

    public function initial()
    {
        $this->Initial->initial_project();
        $this->Initial->initial_people('DBSeer', 'Barzan Mozafari, Carlo Curino, and Samuel Madden.');
        $this->Initial->initial_people('Crowdsourcing Big Data', '');
        $this->Initial->initial_people('BlinkDB', 'Sameer Agarwal, Barzan Mozafari, Aurojit Panda, Henry Milner, Samuel Madden and Ion Stoica');
        $this->Initial->initial_people('High-Performance Complex Event Processing', '');
        $this->Initial->initial_people('SMM: Stream Mill Miner', '');
        $this->Initial->initial_people('User Modeling (BlogoCenter)', '');
        $this->Initial->initial_pub('DBSeer', 'Barzan Mozafari', 'DBSeer: Resource and Performance Prediction for Building a Next Generation Database Cloud', ' Asilomar, California, USA, 2013.', 'http://people.csail.mit.edu/barzan/papers/cidr_2013.pdf', 'In Proceedings of the Conference on Innovative Data Systems Research', 'CIDR', 'http://www.cidrdb.org/cidr2013/index.html', 'Carlo Curino, Samuel Madden');
        $this->Initial->initial_pub('DBSeer', 'Barzan Mozafari ', 'Performance and Resource Modeling in Highly-Concurrent OLTP Workloads.', ' SIGMOD 2013 Conference, New York, NY, USA, 2013', 'http://people.csail.mit.edu/barzan/papers/sigmod_2013.pdf', 'Accepted to Appear In Proceedings of the ACM', 'SIGMOD 2013 Conference', 'http://www.sigmod.org/2013/', 'Carlo Curino, Alekh Jindal, Samuel Madden');
        $this->Initial->initial_pub('Crowdsourcing Big Data', 'Barzan Mozafari', ' Active Learning for Crowd-Sourced Databases', 'Nov 2012.', 'http://web.eecs.umich.edu/~mozafari/datasets/crowdsourcing', '', 'Technical Report', '', 'Purnamrita Sarkar , Michael J. Franklin, Michael I. Jordan, Samuel Madden');
        $this->Initial->initial_pub('Crowdsourcing Big Data', 'Barzan Mozafari', ' Scaling Up Crowd-Sourcing to Very Large Datasets: A Case for Active Learning .', ' September 1-4, 2015', 'http://web.eecs.umich.edu/~mozafari/papers/vldb_2015_crowd.pdf', ' In Proceedings of the 41st International Conference on Very Large Data Bases', 'VLDB 2015', 'http://www.vldb.org/2015/', 'Purnamrita Sarkar, Michael J. Franklin, Michael I. Jordan, Samuel Madden');
        $this->Initial->initial_pub('BlinkDB', 'Sameer Agarwal', ' BlinkDB: Queries with Bounded Errors and Bounded Response Times on Very Large Data.', 'Prague, Czech Republic, 2013.', 'http://people.csail.mit.edu/barzan/papers/eurosys_2013.pdf', 'To appear in Proceedings of the European Conference on Computer Systems', 'EuroSys', 'http://eurosys2013.tudos.org', 'Barzan Mozafari, Aurojit Panda, Henry Milner, Samuel Madden, Ion Stoica');
        $this->Initial->initial_pub('BlinkDB', 'Sameer Agarwal.', "Blink and It's Done: Interactive Queries on Very Large Data. ", 'PVLDB, 5(12): 1902-1905, 2012.', 'http://people.csail.mit.edu/barzan/papers/vldb_2012.pdf', '', '', '', 'Aurojit Panda, Barzan Mozafari, Anand P. Iyer, Samuel Madden, Ion Stoica');
        $this->Initial->initial_pub('High-Performance Complex Event Processing', 'Barzan Mozafari', 'K*SQL: A Unifying Engine for Sequence Patterns and XML. ', "Indianapolis, Indiana, USA, June 6-11, 2010 (SIGMOD 2010's honorable mention demo)", 'http://people.csail.mit.edu/barzan/papers/sigmod_2010.pdf', 'In Proceedings of the ACM ', ' SIGMOD 2010 Conference', 'http://www.sigmod2010.org/index.shtml', 'Kai Zeng, Carlo Zaniolo');
        $this->Initial->initial_pub('High-Performance Complex Event Processing', 'Barzan Mozafari', ' From Regular Expressions to Nested Words: Unifying Languages and Query Execution for Relational and XML Sequences.', 'Singapore, September 13-17, 2010.', 'http://people.csail.mit.edu/barzan/papers/vldb_2010.pdf', '', 'VLDB 2010', 'http://www.vldb2010.org', 'Kai Zeng, Carlo Zaniolo');
        $this->Initial->initial_pub('High-Performance Complex Event Processing', '', 'High-Performance Complex Event Processing over XML Streams. ', "Scottsdale, Arizona, USA, 2012. (SIGMOD 2012's Best Paper Award)", 'http://people.csail.mit.edu/barzan/papers/sigmod_2012.pdf', ' In Proceedings of the ACM ', 'SIGMOD 2012 Conference', 'http://www.sigmod.org/2012/', 'Kai Zeng, Carlo Zaniolo');
        $this->Initial->initial_pub('High-Performance Complex Event Processing', 'Kai Zeng', 'Complex Pattern Matching in Complex Structures: the XSeq Approach ', 'Brisbane, Australia, April, 2013', 'http://people.csail.mit.edu/barzan/papers/icde_2013.pdf', 'In Proceedings of the 29th International Conference on Data Engineering ', 'ICDE 2013', 'http://www.icde2013.org', 'Mohan Yang, Carlo Zaniolo');
        $this->Initial->initial_pub('High-Performance Complex Event Processing', 'Barzan Mozafari', 'High-Performance Complex Event Processing over Hierarchical Data. ', 'Dec, 2013.', 'http://people.csail.mit.edu/barzan/papers/tods_2013.pdf', 'To Appear In ACM TODS\'s Special Issue on \'Best of SIGMOD', '', '', 'Kai Zeng, Loris D\'Antoni, Carlo Zaniolo');
        $this->Initial->initial_pub('SMM: Stream Mill Miner', 'Barzan Mozafari', ' Verifying and Mining Frequent Patterns from Large Windows over Data Streams.', 'Cancún, Mexico, April 7-12, 2008. Download the SWIM implementation for frequent pattern/itemset mining over data streams and Download the implementation for DTV and DFV verifiers.', 'http://people.csail.mit.edu/barzan/papers/icde_2008.pdf', 'In Proceedings of the 24th International Conference on Data Engineering', 'ICDE 2008', 'http://www.icde2008.org', 'Hetal Thakkar, Carlo Zaniolo');
        $this->Initial->initial_pub('SMM: Stream Mill Miner','Hetal Thakkar',' Designing an Inductive DSMS: the Stream Mill Experience.',' in conjunction with (EDBT 2008), Nantes, France, March 29, 2008.','http://people.csail.mit.edu/barzan/papers/ssps_2008.pdf','In Proceedings of the 2nd International Workshop on Scalable Stream Processing Systems (SSPS 2008) in conjunction with ','EDBT 2008','http://edbt2008.univ-nantes.fr', 'Barzan Mozafari and Carlo Zaniolo');
        $this->Initial->initial_pub('SMM: Stream Mill Miner','Hetal Thakkar',' A Data Stream Mining System',' Pisa, Italy, December 15-19, 2008.','http://people.csail.mit.edu/barzan/papers/icdm_2008.pdf','In ','ICDM 2008' ,'http://icdm08.isti.cnr.it' , 'Barzan Mozafari and Carlo Zaniolo');
        $this->Initial->initial_pub('SMM: Stream Mill Miner','Barzan Mozafari.','Optimal Load Shedding with Aggregates and Mining Queries.','  Long Beach, California, USA, March 1-6, 2010.','http://people.csail.mit.edu/barzan/papers/icde_2010.pdf','In Proceedings of the 26th International Conference on Data Engineering','ICDE 2010','http://www.icde2010.org' ,' and Carlo Zaniolo');
        $this->Initial->initial_pub('SMM: Stream Mill Miner','Hetal Thakkar','SMM: a Data Stream Management System for Knowledge Discovery.',', Hannover, Germany, April 11-16, 2011.','http://people.csail.mit.edu/barzan/papers/icde_2011.pdf','In Proceedings of the 27th International Conference on Data Engineering','ICDE2011','http://www.icde2011.org' ,', Nikolay Laptev, Hamid Mousavi, Barzan Mozafari, Vincenzo Russo , Carlo Zaniolo.');
        $this->Initial->initial_pub('SMM: Stream Mill Miner','Kai Zeng','Uncertainty Propagation in Complex Query Networks on Data Streams: A New Paradigm for Load Shedding. ','Technical Report, 120016, UCLA, 2011.','http://people.csail.mit.edu/barzan/papers/uncertainty-tech.pdf','','','' ,', Barzan Mozafari, Shi Gao, and Carlo Zaniolo.');
        $this->Initial->initial_pub('User Modeling (BlogoCenter)','Rodrigo B. Almeida','On the Evolution of Wikipedia',', Boulder, Colorado, U.S.A., March 26-28, 2007.',' http://people.csail.mit.edu/barzan/papers/icwsm_2007.pdf', 'In Proceedings of the International Conference on Weblogs and Social Media','ICWSM 2007','http://www.icwsm.org/2007/index.html' ,', Barzan Mozafari, Junghoo Cho.');
        $this->Initial->initial_pub('User Modeling (BlogoCenter)','Barzan Mozafari.','Publishing Naive Bayesian Classifiers: Privacy without Accuracy Loss.',' Lyon, France, August 24-28, 2009.','http://people.csail.mit.edu/barzan/papers/vldb_2009.pdf' ,'In Proceedings of the 35th International Conference on Very Large Data Bases','VLDB 2009','http://vldb2009.org' ,' and Carlo Zaniolo');
        $this->Initial->initial_des('DBSeer','News: Our paper got in CIDR 2013! ','CIDR is based on a revolutionary vision which is quite different than the mainstream database conferences. This is what their website says: 

The biennial Conference on Innovative Data Systems Research (CIDR) is a systems-oriented conference, complementary in its mission to the mainstream database conferences like SIGMOD and VLDB, emphasizing the systems architecture perspective. CIDR gathers researchers and practitioners from both academia and industry to discuss the latest innovative and visionary ideas in the field. 

DBSeer is now accepted in CIDR\'s Outrageous Ideas and Vision Track. I am looking forward to presenting our DBSeer in January 2013!');
        $this->Initial->initial_des('DBSeer','News: DBSeer\'s monitoring module is now open-source! ','Download it from here. Email me if you run into any issues.');
        $this->Initial->initial_des('DBSeer','News: Teradata has assigned a team of engineers to incorporate DBSeer into their framework! ','Teradata is a leading provider of enterprise analytic technologies and services that include Data Warehousing, Business Intelligence and CRM. A few months ago I presented DBSeer at Dagstuhl\'s Database Workload Management Workshop which is where I met a member of Teradata\'s workload management team. Long story short, as a result of the meetings that followed (between the Teradata\'s technical managers and I), Teradata has decided to port DBSeer into their framework with the goal of automating their workload management mechanisms, which are currently based on manual configuration of a set of rules (called throttles). Exciting news is that with the allocation of engineering resources at Teradata to this project, the adoption of DBSeer into their framework has now officially started! I am already excited and looking forward to this collaboration and to see DBSeer\'s applications in a large commercial database system!');
        $this->Initial->initial_des('DBSeer','News: Our paper got in SIGMOD 2013! ','The annual ACM SIGMOD/PODS conference is a leading international forum for database researchers, practitioners, developers, and users to explore cutting-edge ideas and results, and to exchange techniques, tools, and experiences. The full version of our DBSeer paper is now accepted in SIGMOD 2013, and I am looking forward to presenting DBSeer in June 2013! Recently I have been traveling a lot, so I am extra excited that this year\'s SIGMOD is held somewhere close to Boston (it is held in New York)!');
        $this->Initial->initial_des('DBSeer','News: DBSeer in the press! ','DBSeer has received considerable coverage from the press soon after MIT News Office did a story on DBSeer! Read more here.');
        /*$this->Initial->initial_des('');
        $this->Initial->initial_des('');
        $this->Initial->initial_des('');
        $this->Initial->initial_des('');
        $this->Initial->initial_des('');
        $this->Initial->initial_des('');
        $this->Initial->initial_des('');
        $this->Initial->initial_des('');
        $this->Initial->initial_des('');
        $this->Initial->initial_des('');
        */
                $this->dash();


    }

    public function logout()
    {
        $this->user_lib->logout();
        // go to projects page
    }

    public function dash()
    {
        // admin dash here
        /*if (!$this->user_lib->is_login()) {
            redirect(site_url('admin/login'));
        }*/
        $projects = $this->project_model->get_all_projects();
        $this->load->view('header');
        $this->load->view('dash', array('projects' => $projects));
        $this->load->view('footer');

    }

    public function create_project()
    {
        $this->load->view('header');
        $this->load->view('in_create_project');
        $this->load->view('footer');
    }
    public function create_news()
    {
        $id = $this->input->post('transfer_id');
        $project = $this->project_model->get_project($id);
        if (empty($project)) {
            echo 'project not found';
            return;
        }
        $this->load->view('header');
        $this->load->view('create_news', array('project' => $project));
        $this->load->view('footer');
    }
    public function register_news()
    {
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $id= $this->input->post('id');
        $this->project_model->register_news($title,$content,$id);
        $this->dash();

    }
    public function register_publications()
    {
        $title = $this->input->post('title');
        $link = $this->input->post('link');
        $magzine = $this->input->post('magzine');
        $magzine_link = $this->input->post('magzine_link');
        $info = $this->input->post('info');
        $pre_magzine = $this->input->post('pre_magzine');
        $author = $this->input->post('author');
        $fellow = $this->input->post('fellow');
        $id= $this->input->post('id');
        $this->project_model->register_publications($title,$link,$magzine,$magzine_link,$info,$pre_magzine,$author,$fellow,$id);
        $this->dash();
    }
    public function create_publication()
    {
        $id = $this->input->post('transfer_id');
        $project = $this->project_model->get_project($id);
        if (empty($project)) {
            echo 'project not found';
            return;
        }
        $this->load->view('header');
        $this->load->view('create_publications', array('project' => $project));
        $this->load->view('footer');
    }
    public function register_project()
    {
        $name = $this->input->post('pj_name');
        $description = $this->input->post('description');
        $news = $this->input->post('news');
        $news_title = $this->input->post('news_title');
        $people = $this->input->post('people');
        $pub_title = $this->input->post('pub_title');
        $first_author = $this->input->post('frist_author');
        $fellow = $this->input->post('fellow');
        $magzine = $this->input->post('magzine');
        $pre_magzine = $this->input->post('pre_magzine');
        $magzine_link = $this->input->post('magzine_link');
        $link = $this->input->post('link');
        $info = $this->input->post('info');
        //if($mode == 0)//create
        $this->project_model->register_project($name, $description, $news, $news_title, $people, $pub_title, $first_author, $pre_magzine, $magzine, $magzine_link, $link, $info, $fellow);
                $this->dash();
        //else{
        //    $this->project_model->update_project($name,$description,$news,$news_title,$people,$pub_title,$author,$magzine);
    }

    public function register_2_project()
    {
        $name = $this->input->post('pj_name');
        $description = $this->input->post('description');
        $news = $this->input->post('news');
        $news_title = $this->input->post('news_title');
        $people = $this->input->post('people');
        $pub_title = $this->input->post('pub_title');
        $first_author = $this->input->post('frist_author');
        $fellow = $this->input->post('fellow');
        //$fellow_link = $this->input->post('fellow_link');
        $pre_magzine =  $this->input->post('pre_magzine');
        $magzine = $this->input->post('magzine');
        $magzine_link = $this->input->post('magzine_link');
        $link = $this->input->post('link');
        $info = $this->input->post('info');
        //if($mode == 0)//create
        //    $this->project_model->register_project($name,$description,$news,$news_title,$people,$pub_title,$author,$magzine);
        //else
        $transfer_id = $this->input->post('transfer_id');
        //$this->project_model->update_project($transfer_id,$name,$description,$news,$news_title,$people,$pub_title,$first_author,$magzine,$magzine_link,$link,$info,$fellow,$fellow_link);
        $this->project_model->delete_project($transfer_id);
        $this->project_model->register_project($name, $description, $news, $news_title, $people, $pub_title, $first_author, $pre_magzine, $magzine, $magzine_link, $link, $info, $fellow);
                $this->dash();
    }

    public function update_project()
    {
        $transfer_id = $this->input->post('pj_id');
        $this->load->view('header');
        $this->load->view('in_update_project', array('transfer_id' => $transfer_id));
        $this->load->view('footer');
    }

    public function add_des()
    {

    }

    public function add_pub()
    {

    }

    public function delete_project()
    {
        $pj_id = $this->input->post('pj_id');
        $this->project_model->delete_project($pj_id);
        $this->dash();
    }

    public function delete_people()
    {

    }

    public function delete_des()
    {

    }

    public function delete_pub()
    {

    }
}