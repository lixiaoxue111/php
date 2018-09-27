<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function save($uname,$pwd){
        $this -> db -> insert('t_user',array(
            'u_name' => $uname,  // u_name 与数据库一致
            'u_pwd' => $pwd
        ));
    }
}
