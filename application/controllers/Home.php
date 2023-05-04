<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }
    public function index(){
        $data['packages'] = $this->user_model->getpackages();
        $data['blogs'] = $this->user_model->getArticles();
        $data['user_details'] = $this->user_model->getuserdetails();
        $data['title'] = "Welcome to Diet & Keto Website";
        $this->load->view('header',$data);
        $this->load->view('home');
        $this->load->view('footer');
    }
    public function query_form($pack_id){
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="text text-danger">', '</div>');
        $this->form_validation->set_rules('age','Age','required');
        $this->form_validation->set_rules('height','Height','required');
        $this->form_validation->set_rules('height_unit','Height Unit','required');
        $this->form_validation->set_rules('weight_unit','Weight Unit','required');
        $this->form_validation->set_rules('weight','Weight','required');
        $this->form_validation->set_rules('health_status','Health Status','required');
        $this->form_validation->set_rules('activity_level','Activity Level','required');
        $this->form_validation->set_rules('food_preferences','Food Preferences','required');
        $this->form_validation->set_rules('food_preference_details','Food Preference Details','required');
        $this->form_validation->set_rules('cooking_skills','Cooking Skills','required');
        $this->form_validation->set_rules('budget','Budget','required');        
        if($this->form_validation->run()){
            $post = $this->input->post();
            $post['created'] = date('Y-M-D');     
            $post['package_id'] = $pack_id;      
            if($query_id = $this->user_model->insert_query($post)){
                return redirect('login/index/'.$query_id);
            }
        }
        else{
            $data['user_details'] = $this->user_model->getuserdetails();            
            $data['title']="Add Your Query";
            $this->load->view('header', $data);
            $this->load->view('user/query_form', $data);
            $this->load->view('footer');
        }
    }
    public function logout(){
        $this->session->unset_userdata('id');
        return redirect('home');
    }    
    public function viewblog($slug){
        $data['blog'] = $this->user_model->getblog($slug);
        $data['user_details'] = $this->user_model->getuserdetails();
        $data['title'] = "View Blog";
        $this->load->view('header',$data);
        $this->load->view('viewblog',$data);
        $this->load->view('footer');
    }
}