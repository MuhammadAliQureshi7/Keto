<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class User_model extends CI_Model {
    public function isvalidate($username,$password){
        $q=$this->db->where('email',$username)
                    ->where('password',$password)
                    ->get('users');
        if($q->num_rows()){
            return $q->row()->id;
        }
        else{
            return false;
        }
    }
    public function isadmin($username,$password){
        $q=$this->db->where('email',$username)
                    ->where('password',$password)
                    ->get('admin');
        if($q->num_rows()){
            return $q->row()->id;
        }
        else{
            return false;
        }
    }
    public function getUserDetails(){
        $this->db->select()
                 ->from('users')
                 ->where('id',$this->session->userdata('id'));
        $q = $this->db->get();
        return $q->result();
    }
    public function getAdminDetails(){
        $this->db->select()
                 ->from('admin')
                 ->where('id',$this->session->userdata('id'));
        $q = $this->db->get();
        return $q->result();
    }
    public function register($post){
        $q = $this->db->insert('users',$post);
        if($q){
        	return $this->db->insert_id();
        }else{
        	return false;
        }
    }
    public function getrequest(){
        $this->db->select()
                 ->from('additional_info as a')
                 ->join('response as b','b.query_id = a.id')
                 ->where('b.user_id', $this->session->userdata('id'));
        $q = $this->db->get();
        return $q->result();
    }
    public function getrequestbyid($id){
        $this->db->select()
                 ->from('additional_info as a')
                 ->join('response as b','b.query_id = a.id')
                 ->where('b.id', $id);
        $q = $this->db->get();
        return $q->result();
    }
    public function insert_query($post){
        $q = $this->db->insert('additional_info',$post);
        if($q){
        	return $this->db->insert_id();
        }else{
        	return false;
        }
    }
    public function insert_response($post){
        $q = $this->db->insert('response',$post);
        if($q){
        	return $this->db->insert_id();
        }else{
        	return false;
        }
    }    
    public function getlastquery($id){
        $this->db->select()
                 ->from('additional_info')
                 ->where('id', $id);
        $q = $this->db->get();
        return $q->result();
    }
    public function get_articles_pagination($limit,$offset){
        $this->db->select()
                 ->from('articles')
                 ->limit($limit,$offset);               
        $q = $this->db->get();
        return $q->result();
    }
    public function articles_num_rows(){
        $this->db->select()
                 ->from('articles');               
        $q = $this->db->get();
        return $q->num_rows();
    }
    public function addarticle($post){
        $q = $this->db->insert('articles',$post);
        if($q){
        	return $this->db->insert_id();
        }else{
        	return false;
        }
    }
    public function get_articles_search($query){
        $this->db->select();
        $this->db->from('articles');
        if($query != ''){
            $this->db->like('title',$query);
            $this->db->or_like('slug',$query);
        }         
        $this->db->order_by('id','Desc');
        return $this->db->get();         
    }
    
    public function delete_article($id){
        $this->db->where('id',$id)
                 ->delete('articles');
                 return true;
    }
    public function getArticles(){
        $this->db->select()
                 ->from('articles');
        $q = $this->db->get();
        return $q->result();
    }
    public function getblog($slug){
        $this->db->select()
                 ->from('articles')
                 ->where('slug',$slug);
        $q = $this->db->get();
        return $q->result();
    }
    public function totalusers(){
        $this->db->select()
                 ->from('users');
        $q = $this->db->get();
        return $q->num_rows();
    }
    public function get_packages_search($query){
        $this->db->select();
        $this->db->from('packages');
        if($query != ''){
            $this->db->like('title',$query);
            $this->db->or_like('price',$query);
            $this->db->or_like('description',$query);
            $this->db->or_like('days',$query);
        }         
        $this->db->order_by('id','Desc');
        return $this->db->get();         
    }
    public function addpackage($post){
        $q = $this->db->insert('packages',$post);
        if($q){
        	return $this->db->insert_id();
        }else{
        	return false;
        }
    }
    public function getpackages(){
        $this->db->select()
             ->from('packages');
        $q = $this->db->get();
        return $q->result();
    }
    public function update_user_id($id,$userid){
        $this->db->set('user_id',$userid)
                 ->where('id',$id);
        $q = $this->db->update('additional_info');
        return true;
    }
    public function cart($id){
        $this->db->select('package_id')
                 ->from('additional_info')
                 ->where('id',$id);
        $q = $this->db->get();
        return $q->result();
    }
    public function package_details($pack){
        $this->db->select()
                 ->from('packages')
                 ->where('id',$pack);
        $q = $this->db->get();
        return $q->result();
    }
}