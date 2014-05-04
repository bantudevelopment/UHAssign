<?php

class Site extends CI_Controller
{
    function __construct() 
   {
        parent::__construct();
        //$this->is_logged_in();
    }
    function index()
    {
        $data['main_content'] = 'home';
        $this->load->view('includes/template', $data);
    }
    
    function read()
    {
        //$data = array();
        //n
       // if($query = $this->site_model->get_records())
        //{
            //$data['records'] = $query;
        //}
        
        
        $this->load->library('pagination');
        $this->load->library('table');
        
        $config['base_url'] = 'http://localhost/ci_day5/index.php/site/read';
        $config['total_rows'] = $this->db->get('data')->num_rows();
        $config['per_page'] = 10;
        $config['num_links']= 20;
        $config['full_tag_open'] = '<div = "pagination">';
        $config['full_tag_close'] = '</div>' ;
        
        $this->pagination->initialize($config);
        $data['records'] = $this->db->get('data', $config['per_page'],$this->uri->segment(3));
                //db->get('data', $config['per_page'],$this->uri->segment(3));
    
         //$data['main_content'] = 'members_area';
         $this->load->view('members_area',$data);    
    }
    
    
    function aboutus()
    {
        $data['main_content'] = 'aboutus';
        $this->load->view('includes/template', $data);
    }
    function contactus()
    {
        $data['main_content'] = 'contactus';
        $this->load->view('includes/template', $data);
    }
    function gallery()
    {
        
       $this->load->model('gallery_model');
       
       if ($this->input->post('upload')){
           $this->gallery_model->do_upload();
       }
        $data['images'] = $this->gallery_model->get_images();
        $this->load->view('gallery_view', $data);
    }
      
    
    function members_area()
    {
        
        $data['main_content'] = 'members_area';
        $this->load->view('includes/template', $data);
    }
    
    function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        
        if(!isset($is_logged_in)|| $is_logged_in != true)
        {
            echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';
            die();
        }
    } 

    function create(){
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content')
        );
        $this->site_model->add_record($data);
        $this->read();
        
    }
    function update()
    {
        $data = array(
            'title' => 'My Freshly UPDATED Title',
            'content'=> 'Content should go here: it is updated'
        );
        $this->site_model->update_record($data);
        $this->read();
    }
    function delete()
    {
        $this->site_model->delete_row();
        $this->read();
    }
    
    
    }

