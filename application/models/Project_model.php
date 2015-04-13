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
    public function empty_current_table(){
        $this->db->empty_table('current');
    }
    public function register_project($name, $description, $news, $news_title, $people, $pub_title, $first_author, $pre_magzine, $magzine, $magzine_link, $link, $info, $fellow)
    {
        $people = trim($people);
        $name = trim($name);
        $description = trim($description);
        $people = trim($people);
        $this->db->insert('projects', array(
            'name' => $name,
            'description' => $description,
        ));
        $num = count($news);
        $insert_id = $this->db->insert_id();
        $this->db->where('id',$insert_id);
        $this->db->update('projects', array(
            'order' => $insert_id
        ));
        $row = $this->db->select('*')->from('current')->get()->row_array();
        if(count($row) != 0){
            $this->db->where('id',$insert_id);
            $this->db->update('projects', array(
                'order' => $row['value']
            ));
            $this->db->empty_table('current');
        }
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
        $p_count = 0;
        foreach($pub_title as $p){
            if(!empty($p))
                $p_count++;
        }

        for ($i = 0; $i < $p_count; $i++) {
            $this->db->insert('publication', array(
                'pj_id' => trim($id),
                'title' => trim($pub_title[$i]),
                'first_author' => $first_author[$i],
                'pre_magzine' => trim($pre_magzine[$i]),
                'magzine' => trim($magzine[$i]),
                'magzine_link' => trim($magzine_link[$i]),
                'link' => trim($link[$i]),
                'info' => trim($info[$i]),
                'fellow' => trim($fellow[$i])
            ));
        }
    }

    public function update_project($pj_id,$name, $description, $news, $news_title, $people, $pub_title, $first_author, $pre_magzine, $magzine, $magzine_link, $link, $info, $fellow){
        $people = trim($people);
        $name = trim($name);
        $description = trim($description);
        $people = trim($people);
        // $first_author = trim($first_author);

        $this->db->where('id',intval($pj_id));
        $this->db->update('projects', array(
            'name' => $name,
            'description' => $description,
        ));

        // delete all old news
        $this->db->where('pj_id',$pj_id);
        $this->db->delete('description');

        $id = $pj_id;
        $num = count($news);
        for ($i = 0; $i < $num; $i++) {
            $this->db->insert('description', array(
                'pj_id' => $id,
                'title' => $news_title[$i],
                'content' => $news[$i]
            ));
        }

        // delete old people
        $this->db->where('pj_id',$pj_id);
        $this->db->delete('people');

        $this->db->insert('people', array(
            'pj_id' => $id,
            'name' => $people
        ));

        // delete old publications
        $this->db->where('pj_id',$pj_id);
        $this->db->delete('publication');

        $p_count = 0;
        foreach($pub_title as $p){
            if(!empty($p))
                $p_count++;
        }
        for ($i = 0; $i < $p_count; $i++) {
            $this->db->insert('publication', array(
                'pj_id' => trim($id),
                'title' => trim($pub_title[$i]),
                'first_author' => trim($first_author[$i]),
                'pre_magzine' => trim($pre_magzine[$i]),
                'magzine' => trim($magzine[$i]),
                'magzine_link' => trim($magzine_link[$i]),
                'link' => trim($link[$i]),
                'info' => trim($info[$i]),
                'fellow' => trim($fellow[$i])
            ));
        }
    }

    public function find_order($id){
        $order_array = $this->db->select('*')->from('projects')->where('id',$id)->get()->result_array();
        return $order_array[0];
    }
    public function delete_project($id,$order)
    {
        $this->db->insert('current',array('value' => $order['order']));
        $this->db->delete('projects', array('id' => $id));
        $this->db->delete('people', array('pj_id' => $id));
        $this->db->delete('publication', array('pj_id' => $id));
        $this->db->delete('description', array('pj_id' => $id));
        return true;
    }
    public function delete_all_project($id)
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