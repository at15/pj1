<?php

class Project_model extends CI_Model
{
    public function get_all_projects()
    {
        return $this->db->select('*')->from('projects')->get()->result_array();
    }

    public function create_project($name, $description)
    {
        $this->db->insert('projects', array(
            'name' => $name,
            'description' => $description
        ));
    }
}