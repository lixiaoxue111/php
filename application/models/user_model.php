<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function save($uname,$pwd){
        $this -> db -> insert('t_user',array(
            'u_name' => $uname,  // u_name 与数据库一致
            'u_pwd' => $pwd
        ));
        return $this -> db -> affected_rows(); //返回受影响的行数
    }

    public function get_by_name_pwd($name,$pwd){
        $query=$this -> db ->get_where('t_user',array(
            'u_name' => $name,
            'u_pwd' => $pwd
        ));
        return $query -> row(); // $query -> result();
    }
}
