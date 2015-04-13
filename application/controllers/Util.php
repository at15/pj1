<?php

/**
 * Created by PhpStorm.
 * User: gust
 * Date: 4/8/15
 * Time: 10:05 PM
 */

/**
 * Class Util
 *
 * @property user_model user_model
 */
class Util extends CI_Controller
{
    public function __construct()
    {
        if (!is_cli()) {
            show_404();
        }
        parent::__construct();
        $this->load->model('user_model');
    }

    public function add_user()
    {
        echo 'Enter new user Name' . PHP_EOL;
        $name = rtrim(fgets(STDIN), PHP_EOL);
        if ($this->user_model->user_exists($name)) {
            echo "{$name} already exists sorry" . PHP_EOL;
            return;
        }
        echo 'Enter password' . PHP_EOL;
        $pwd = rtrim(fgets(STDIN), PHP_EOL);
        echo 'Enter password again' . PHP_EOL;
        $pwd_confirm = rtrim(fgets(STDIN), PHP_EOL);
        if ($pwd !== $pwd_confirm) {
            echo 'Password not match ' . PHP_EOL;
        }
        $this->user_model->add_user($name, $pwd);
        echo 'user created!';
    }
}