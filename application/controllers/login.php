<?php
class Login extends CI_Controller {
    
    function index()
    {
        $data['main_content'] = 'login_form';
        $this->load->view('includes/template', $data);
    }
    
    function validate_credentials()
    {
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();
        
        if ($query)//if the user's credentials validated
        {
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true
            );
            $this->session->set_userdata($data);
            redirect('site/read');
        }
        else
        {
            $this->index();
        }
    }
    function signup()
    {
        $data['main_content']='signup_form';
        $this->load->view('includes/template',$data);
    }
    function create_member()
    {
        $this->load->library('form_validation');
        //field name, error message, validation rules
        
        $this->form_validation->set_rules('first_name','Name','trimirequired');
        $this->form_validation->set_rules('title','Title','trimirequired');
        $this->form_validation->set_rules('last_name','Last Name','trimirequired');
        
        $this->form_validation->set_rules('email_address','Email','trimirequired|valid_email'); 
        $this->form_validation->set_rules('username','Username','trimirequired|min_length[4]');
        $this->form_validation->set_rules('password','Password','trimirequired|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('password2','Password Confirmation','trimirequired|matches[password]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->signup();
        }
        else 
        {
            $this->load->model('membership_model');
            if($query = $this->membership_model->create_member())
            {
                $data['main_content'] = 'signup_successful';
                $this->load->view('includes/template', $data);
            }
            else
            {
                $this->load->view('signup_form');
            }
        }
    }
}
