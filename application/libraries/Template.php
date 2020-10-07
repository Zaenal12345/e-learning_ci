<?php

class Template{
    protected $_ci;
    
    function __construct(){
        $this->_ci = &get_instance();
    }
    
    function partials($content, $data = NULL){
      /*
       * $data['headernya'] , $data['contentnya'] , $data['footernya']
       * variabel diatas ^ nantinya akan dikirim ke file views/template/index.php
       * 
      */
          $data['navbar_carikampus'] = $this->_ci->load->view('components/navbar_carikampus', $data, TRUE);
          $data['navbar_login'] = $this->_ci->load->view('components/navbar_login', $data, TRUE);
          $data['navbar_blog'] = $this->_ci->load->view('components/navbar_blog', $data, TRUE);
          $data['header'] = $this->_ci->load->view('components/header', $data, TRUE);
          $data['navbar'] = $this->_ci->load->view('components/navbar', $data, TRUE);
          $data['navbar'] = $this->_ci->load->view('components/navbar', $data, TRUE);
          $data['content'] = $this->_ci->load->view($content, $data, TRUE);
          $data['footer'] = $this->_ci->load->view('components/footer', $data, TRUE);
          
          $this->_ci->load->view('template', $data);
    }
}