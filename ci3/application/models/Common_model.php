<?php

class Common_model extends CI_model {

        public function image($image)
        {
               $return = ''; 
                $config['upload_path']          = './image/';
                $config['allowed_types']        = 'jpg|png|webp|jpeg';
                $config['max_size']             = 10000000;
                $config['max_width']            = 10000000;
                $config['max_height']           = 10000000;
                $config['file_name']            = rand();
                

                $this->load->library('upload', $config);
                 $this->upload->do_upload($image);
                 $data = $this->upload->data();   
                  if ($data) {
                return $return = $data['file_name'];
                } 
        }
       
}

