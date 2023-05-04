<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('id')){
            return redirect('adminlogin/index');
        }
        $this->load->model('user_model');
    }
    public function index(){
        $data['admin'] = $this->user_model->getAdminDetails();
        $data['total_users'] = $this->user_model->totalusers();
        $data['title'] = "Welcome to Admin Panel";
        $this->load->view('admin/header',$data);
        $this->load->view('admin/index',$data);
        $this->load->view('admin/footer');
    }
    public function articles(){
        $data['admin'] = $this->user_model->getAdminDetails();
       /* $this->load->library('pagination');
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] ='</li>';
        $config['cur_tag_open'] = '<li class="page-item active">';
        $config['cur_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['anchor_class'] = 'class="page-link" ';
        $config['base_url'] = base_url('admin/articles');
        $config['total_rows'] = $this->user_model->articles_num_rows();
        $config['per_page'] = 10;

        $this->pagination->initialize($config);

        $data['articles'] = $this->user_model->get_articles_pagination($config['per_page'],$this->uri->segment(3)); */
        $data['title'] = "Articles";
        $this->load->view('admin/header',$data);
        $this->load->view('admin/articles');
        $this->load->view('admin/footer');
    }
    public function add_article(){
        $data['admin'] = $this->user_model->getAdminDetails();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('slug','Slug','required|alpha_dash|is_unique[articles.slug]');  
        $this->form_validation->set_message('is_unique', 'The Slug already exist!');      
        $this->form_validation->set_rules('body','Body','required');
        if($this->form_validation->run()){
            $post = $this->input->post();
            $config['upload_path'] =  'assets/images/articles/';
            $config['filename'] = $this->input->post('slug');
            $config['allowed_types'] = 'gif|png|jpg';
            //$config['max_size'] = 100;
            $this->load->library('upload');
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('image')){
                $error = array('error'=> $this->upload->display_errors());
                foreach($error as $error){
                    
                    echo $error;
                }
            }
            else{
                $data=$this->upload->data();
                $image_path="assets/images/articles/".$data['raw_name'].$data['file_ext'];                
                $post['image']  = $image_path;      
                $post['date'] = date('F d, Y');         
                
                if($this->user_model->addarticle($post)){
                    $this->session->set_flashdata('msg','Article added Successfully');
                    $this->session->set_flashdata('msg_class', 'alert-success');
                    redirect('admin/add_article');
                }
                else{
                    $this->session->set_flashdata('msg','Article Not Added');
                    $this->session->set_flashdata('msg_class', 'alert-danger');
                    redirect('admin/add_article');
                }
                
            }        
        }
        else{
            $data['title'] = "Add Article";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/add_article');
            $this->load->view('admin/footer');
        }
        
    }
    public function fetch_article(){
        $output = "";
        $query = "";
        if($this->input->post('query')){
            $query = $this->input->post('query');
        }
        $data = $this->user_model->get_articles_search($query);
        
        if($data->num_rows() > 0){
            foreach($data->result() as $row){
                $output .="
                    <tr>
                        <td colspan='2'>".$row->title."</td>
                        <td colspan='2'>".$row->slug."</td>
                        <td colspan='2'>".$row->date."</td>
                        <td colspan='1'>".$row->summary."</td>
                        <td colspan='2'>
                        <a href='#' class='text-info'><i class='fa fa-edit'></i></a>
                        <a href='".base_url('admin/delete_article/'.$row->id)."' class='text-danger'><i class='fa fa-trash'></i></a>
                        </td>
                    </tr>
                ";
            }
        }
        else{
            $output .= "
                <tr>
                    <td colspan='5'><p class='text-danger'>No Data Found</p></td>
                </tr>
            ";
        }
        echo $output;
    }
    public function delete_article($id){
        if($this->user_model->delete_article($id)){
            $this->session->set_flashdata('msg','Article Deleted Successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
            return redirect('admin/articles');
        }
        else{
            $this->session->set_flashdata('msg','Article Not Deleted');
            $this->session->set_flashdata('msg_class', 'alert-danger');
            return redirect('admin/articles');
        }
        
    }
    public function packages(){
        $data['admin'] = $this->user_model->getAdminDetails();       
        $data['title'] = "Packages";
        $this->load->view('admin/header',$data);
        $this->load->view('admin/packages');
        $this->load->view('admin/footer');
    }
    public function add_package(){
        $data['admin'] = $this->user_model->getAdminDetails();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('price','Price','required');                
        $this->form_validation->set_rules('description','Description','required');
        $this->form_validation->set_rules('days','Days','required');
        //$this->form_validation->set_rules('meals','Meals','required');
        if($this->form_validation->run()){
            $post = $this->input->post();
            $meals = $this->input->post('meals');
            $post['meals'] = json_encode($meals);
            
            if($this->user_model->addpackage($post)){
                $this->session->set_flashdata('msg','Package added Successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
                redirect('admin/add_article');
            }
            else{
                $this->session->set_flashdata('msg','Package Not Added');
                $this->session->set_flashdata('msg_class', 'alert-danger');
                redirect('admin/add_package');
            }
                       
        }
        else{
            $data['title'] = "Add Package";
            $this->load->view('admin/header',$data);
            $this->load->view('admin/add_package');
            $this->load->view('admin/footer');
        }
        
    }
    public function fetch_packages(){
        $output = "";
        $query = "";
        if($this->input->post('query')){
            $query = $this->input->post('query');
        }
        $data = $this->user_model->get_packages_search($query);
        
        if($data->num_rows() > 0){
            foreach($data->result() as $row){
                $output .="
                    <tr>
                        <td>".$row->title."</td>
                        <td>".$row->price."</td>
                        <td>".$row->days." days</td>
                        <td>".implode(", ", json_decode($row->meals))."</td>
                        <td>".$row->description."</td>                        
                        <td>
                        <a href='#' class='text-info'><i class='fa fa-edit'></i></a>
                        <a href='".base_url('admin/delete_article/'.$row->id)."' class='text-danger'><i class='fa fa-trash'></i></a>
                        </td>
                    </tr>
                ";
            }
        }
        else{
            $output .= "
                <tr>
                    <td colspan='5'><p class='text-danger'>No Data Found</p></td>
                </tr>
            ";
        }
        echo $output;
    }
    public function logout(){
        $this->session->unset_userdata('id');
        return redirect('adminlogin');
    } 
}