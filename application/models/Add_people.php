<?php

class Add_people extends CI_Model
{
    public function get_all_users()
    {
        return $this->db->select('*')->from('people')-> where('id', $project_id);
    }
    public function add($name, $description, $project_id)
    {
        $this->db->insert('projects', array(
            'name' => $name,
            'description' => $description,
            'project_id' => $project_id,
        ));
    }
}