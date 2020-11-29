<?php
class Model_info extends CI_Model {

        public function __construct()
        {
                $this->load->database();

        }

        public function get_apropos()
        {
                 $query = $this->db->get('apropos');
                  return $query->result_array();
        }       

        public function get_accueil()
        {
                $query = $this->db->get('home');
                return $query->result_array();

        }

        public function get_experiences()
        {
                $query = $this->db->get('experiences');
                return $query->result_array();

        }
        
        public function get_veille()
        {
                $query = $this->db->get('veille');
                return $query->result_array();

        }
        
        public function get_contact()
        {
                $query = $this->db->get('contact_page');
                return $query->result_array();

        }
        //------INSERT

        public function set_contact($data)
        {
                
                $this->db->insert('contact',$data);
                return $this->db->insert_id();

        }

        
}