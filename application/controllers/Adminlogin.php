<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Adminlogin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('id')){
            return redirect('admin/index');
        }
        $this->load->model('user_model');
    }
    public function index(){
        $data['user_details'] = $this->user_model->getuserdetails();
        $this->form_validation->set_error_delimiters('<div class="text text-danger">', '</div>');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('password','Password','required');
        
        if($this->form_validation->run()){
            $user=$this->input->post('email');
            $pass=$this->input->post('password');

            
            $login_id=$this->user_model->isadmin($user,$pass);
            if($login_id){
                $this->session->set_userdata('id',$login_id);
                return redirect('admin/index');
            }
            else{
                $this->session->set_flashdata('login_failed','Invalid Username/Password');
                return redirect('adminlogin');
            }
        }
        else{
            $data['title']="Admin Login";
            $this->load->view('admin/login',$data);    
        }
    }     
   
}
