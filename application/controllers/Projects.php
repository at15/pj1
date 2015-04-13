<?php

/**
 * Created by PhpStorm.
 * User: gust
 * Date: 4/8/15
 * Time: 9:20 PM
 */

/**
 * Class Projects
 *
 * @property CI_Input input
 * @property project_model project_model
 */
class Projects extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('project_model');
    }

    public function index()
    {
        $projects = $this->project_model->get_all_projects();
        $this->load->view('header');
        $this->load->view('projects', array('projects' => $projects));
        //$this->load->view('projects', array('news' => $projects));
        $this->load->view('footer');
    }

    public function create_news()
    {
        $project_id = $this->input->get('project_id');
        $project = $this->project_model->get_project($project_id);
        if (empty($project)) {
            echo 'project not found';
            return;
        }
        $this->load->view('header');
        $this->load->view('create_news', array('project' => $project));
        $this->load->view('footer');
    }

    public function create_publications()
    {
        $project_id = $this->input->get('project_id');
        $project = $this->project_model->get_project($project_id);
        if (empty($project)) {
            echo 'project not found';
            return;
        }
        $this->load->view('header');
        $this->load->view('create_publications', array('project' => $project));
        $this->load->view('footer');
    }
    /*public function create()
    {
        $this->project_model->create_project('dobi', 'doubidesc');
    }*/
}