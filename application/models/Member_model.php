<?php
    class Member_model extends CI_Model
    {
        function __construct()
        {
            $this->load->database();
        }

        function get_member($email)
        {
            $query = $this->db->get_where("Member", array('email' => $email));
            return $query->row_array();   
        }

        function insert_member($data)
        {
            $this->db->insert("Member", $data);
        }

        function can_login($email, $password)
        {
            $query = $this->db->get_where("Member", array('email' => $email, 'password' => $password));
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