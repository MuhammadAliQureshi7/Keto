<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('id')){
            return redirect('home/index');
        }
        $this->load->model('user_model');
    }
    public function index($query_id){
        $data['user_details'] = $this->user_model->getuserdetails();
        $this->form_validation->set_error_delimiters('<div class="text text-danger">', '</div>');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('password','Password','required');
        
        if($this->form_validation->run()){
            $user=$this->input->post('email');
            $pass=$this->input->post('password');

            
            $login_id=$this->user_model->isvalidate($user,$pass);
            if($login_id){
                $this->session->set_userdata('id',$login_id);
                if($query_id > 0){
                    return redirect('user/payment/'.$query_id);
                }
                else{
                    return redirect('home');
                }
            }
            else{
                $this->session->set_flashdata('login_failed','Invalid Username/Password');
                return redirect('login');
            }
        }
        else{
            $data['title']="User Login | User Signup";
            $this->load->view('header', $data);
            $this->load->view('register');    
            $this->load->view('footer');
        }
    }   
    public function register(){
        $this->form_validation->set_error_delimiters('<div class="text text-danger">', '</div>');
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run()){
            $post = $this->input->post();
            if($this->user_model->register($post)){
                $this->session->set_flashdata('msg', 'Your Request has been submitted Successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
                return redirect('login/index');
            }
            else {
                $this->session->set_flashdata('msg', 'Your Request Not Sent !');
                $this->session->set_flashdata('msg_class', 'alert-danger');
                return redirect('login/index');
            }
        }
        else {
            $data['title'] = "Register | Diet & Keto Website";
            $this->load->view('header', $data);
            $this->load->view('register');
            $this->load->view('footer');
        }
        
    }
   
}
