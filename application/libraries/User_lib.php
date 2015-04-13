<?php

/**
 * Created by PhpStorm.
 * User: gust
 * Date: 4/8/15
 * Time: 9:49 PM
 */
class User_lib
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function is_login()
    {
        $user = $this->ci->session->userdata('user');
        if ($user AND isset($user['id'])) {
            return true;
        }
        return false;
    }

    public function login($user_name, $password)
    {
        $this->ci->load->library('secure_lib');
        $this->ci->load->model('user_model');

        $hashed = $this->ci->secure_lib->hash_pwd($password);
        $user = $this->ci->user_model->find_user($user_name);
//        var_dump($user);
//        var_dump($_POST);
        if ($user AND $user['password'] == $hashed) {
            // store things in session
            $this->ci->session->set_userdata('user', $user);
            return true;
        }

        return false;
    }

    public function logout()
    {
        // destroy session
        $this->ci->session->sess_destroy();
    }
}