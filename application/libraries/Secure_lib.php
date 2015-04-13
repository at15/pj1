<?php

/**
 * Created by PhpStorm.
 * User: gust
 * Date: 4/8/15
 * Time: 10:48 PM
 */
class Secure_lib
{
    public function hash_pwd($password)
    {
        return sha1(sha1($password . 'icbc') . md5($password . 'al2'));
    }
}