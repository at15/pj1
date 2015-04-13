<?php

class Project_model extends CI_Model
{
    public function get_project($id)
    {
        return $this->db->select('*')->from('projects')->where('id', intval($id))->get()->row_array();
    }

    public function get_all_projects($column = '*')
    {
        return $this->db->select($column)->from('projects')->get()->result_array();
    }
    public function register_news($title,$content,$id)
    {
         $this->db->insert('description',array(
            'title' => $title,
            'content' => $content,
            'pj_id' => $id
        ));
    }
    public function register_publications($title,$link,$magzine,$magzine_link,$info,$pre_magzine,$author,$fellow,$id){
        $this->db->insert('publication',array(
            'title' => $title,
            'link' => $link,
            'magzine' => $magzine,
            'magzine_link' => $magzine_link,
            'info' => $info,
            'pre_magzine' => $pre_magzine,
            'first_author' => $author,
            'fellow' => $fellow,
            'pj_id' => $id
            ));
    }
    public function register_project($name, $description, $news, $news_title, $people, $pub_title, $first_author, $pre_magzine, $magzine, $magzine_link, $link, $info, $fellow)
    {
        $this->db->insert('projects', array(
            'name' => $name,
            'description' => $description
        ));
        $num = count($news);
        $insert_id = $this->db->insert_id();
        $project = $this->db->select('*')->from('projects')->where('id', $insert_id)->get()->result_array();/////
        $id = $project[0]['id'];
        for ($i = 0; $i < $num; $i++) {
            $this->db->insert('description', array(
                'pj_id' => $id,
                'title' => $news_title[$i],
                'content' => $news[$i]
            ));
        }
        $this->db->insert('people', array(
            'pj_id' => $id,
            'name' => $people
        ));

        $num_publications = count($pub_title);
        for ($i = 0; $i < $num_publications; $i++) {
            $this->db->insert('publication', array(
                'pj_id' => $id,
                'title' => $pub_title[$i],
                'first_author' => $first_author[$i],
                'pre_magzine' => $pre_magzine[$i],
                'magzine' => $magzine[$i],
                'magzine_link' => $magzine_link[$i],
                'link' => $link[$i],
                'info' => $info[$i],
                'fellow' => $fellow[$i]
            ));
        }
    }

    public function delete_project($id)
    {
        $this->db->delete('projects', array('id' => $id));
        $this->db->delete('people', array('pj_id' => $id));
        $this->db->delete('publication', array('pj_id' => $id));
        $this->db->delete('description', array('pj_id' => $id));
        return true;
    }

    public function add_people($name, $pj_id)
    {
        $this->db->insert('people', array(
            'name' => $name,
            'pj_id' => $pj_id
        ));
    }

    public function add_des($name, $pj_id)
    {
        $this->db->insert('description', array(
            'name' => $name,
            'pj_id' => $pj_id
        ));
    }

    public function add_pub($name, $pj_id)
    {
        $this->db->insert('publication', array(
            'name' => $name,
            'pj_id' => $pj_id
        ));
    }
}