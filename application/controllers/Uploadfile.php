<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Upload_Controller extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->library('upload');
            $this->load->helper(array('form', 'url'));
        }

        public function custom_view(){
            $this->load->view('custom_view', array('error' => ' ' ));
        }

        public function do_upload(){
            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "jpg|png|jpeg|pdf|doc|docx",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "1080",
                'max_width' => "2048"
            );
            $this->load->library('upload', $config);
            if($this->upload->do_upload())
            {
                $data = array('upload_data' => $this->upload->data());
                $this->load->view('upload_success',$data);
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('custom_view', $error);
            }
        }
    }
?>