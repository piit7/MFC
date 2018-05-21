<?php

class Home extends CI_Controller {
    
    public function index()
    {
        
        $this->accueil();
    }
    
    public function accueil()
    {
        $data = array();
        $data['title'] = 'Accueil - MFC : Maison de Formation Continue';
        $data['contents'] = "accueil_mfc";
        $this->load->view('base/base', $data);
    }
    
    public function contact()
    {
        $data = array();
        $data['title'] = 'Contact - MFC : Maison de Formation Continue';
        $data['contents'] = "contact_mfc";
        $this->load->view('base/base', $data);
    }
    
    public function formation()
    {
        $data = array();
        $data['title'] = 'Formation - MFC : Maison de Formation Continue';
        $data['contents'] = "formation_mfc";
        $this->load->view('base/base', $data);
    }
    
    public function ecole()
    {
        $data = array();
        $data['title'] = 'L\'Ecole - MFC : Maison de Formation Continue';
        $data['contents'] = "ecole_mfc";
        $this->load->view('base/base', $data);
    }
    
    public function inscription()
    {
        $data = array();
        $data['title'] = 'Inscription - MFC : Maison de Formation Continue';
        $data['contents'] = "inscription_mfc";
        $this->load->view('base/base', $data);
    }
    
    public function valider_envoi()
    {
        $data = array();
        $data['title'] = 'Validation - MFC : Maison de Formation Continue';
        $data['contents'] = "validation_inscription_mfc";
        $this->load->view('base/base', $data);
    }

}

?>