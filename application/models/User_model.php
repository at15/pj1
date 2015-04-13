<?php

/**
 * Created by PhpStorm.
 * User: gust
 * Date: 4/8/15
 * Time: 10:30 PM
 */

/**
 * Class User_model
 *
 * @property secure_lib secure_lib
 */
class User_model extends CI_Model
{
    public function add_user($user_name, $password)
    {
        $this->load->library('secure_lib');

        return $this->db->insert('users', array(
            'user_name' => $user_name,
            'password' => $this->secure_lib->hash_pwd($password)
        ));
    }

    public function user_exists($user_name)
    {
        if ($this->find_user($user_name)) {
            return true;
        }
        return false;
    }

    public function find_user($user_name)
    {
        $user = $this->db->select('*')->from('users')
            ->where('user_name', $user_name)->get()->row_array();
        return $user;
    }
}