<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
    public function login()
    {
        $this->load->view('login');
    }
    public function regist()
    {
        $this->load->view('regist');
    }

    //控制器方法
    public function save()
    {
        //echo 'save';
        // 1.接收数据
        $username=$this->input -> post('username'); // username 为input标签中的name属性值 ，下同理
        $password=$this->input -> post('password');
        $repassword=$this->input -> post('repassword');
        // 2. 验证
        $flag=TRUE; //一个Boolean类型的标识位，用来标识是否成功提交， true成功
        $data=array();
        if ($username==''){
            /*$data=array(
                'err_name'=>'请输入用户名!'
            );*/
           // $this->load->view('regist',$data);

            $data['err_name']='请输入用户名!';
            $flag=FALSE;
        }
        if ($password!=$repassword){
            $data['err_pwd']='两次密码不一致！';
            $flag=FALSE;
        }
        if(!$flag){
            $this->load->view('regist',$data); // view  第一个参数：要加载的页面  第二个参数：要传的值
                                                // 只能使页面的跳转，不会改变路径
            //redirect('welcome/regist');//重定向，不能传参
        }else{
            $this -> load -> model('user_model');
            $this -> user_model -> save($username,$password);
            echo 'save ok';
        }

        // 连接数据库

        // 加载view

    }
}
