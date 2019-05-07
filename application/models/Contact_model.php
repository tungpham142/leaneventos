<?php
    class Contact_model extends CI_Model
    {
        function __construct()
        {
            $this->load->database();
        }

        function insert_contact($data)
        {
            $this->db->insert("Contact", $data);
        }

        function get_contact($id = FALSE)
        {
            if($id == FALSE)
            {
                $query = $this->db->get("Contact");
                return $query->result_array();
            }
            $query = $this->db->get_where("Contact", array('id' => $id));
            return $query->row_array();        
        }

        function delete_contact($id)
        {
            $this->db->delete('Contact', array('id' => $id));
        }

        function update_contact($id, $data)
        {
            $this->db->update('Contact', $data, array('id' => $id));
        }
    }
?>