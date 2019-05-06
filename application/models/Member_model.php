<?php
    class Member_model extends CI_Model
    {
        function __construct()
        {
            $this->load->database();
        }

        function get_member($email)
        {
            $query = $this->db->get_where("member", array('email' => $email));
            return $query->row_array();   
        }

        function insert_member($data)
        {
            $this->db->insert("member", $data);
        }

        function can_login($email, $password)
        {
            $query = $this->db->get_where("member", array('email' => $email, 'password' => $password));
            $member = $query->row_array();   
            
            if(count($member) > 0)
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
    }
?>