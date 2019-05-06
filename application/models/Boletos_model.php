<?php
    class Boletos_model extends CI_Model
    {
        function __construct()
        {
            $this->load->database();
        }

        function get_events($id = FALSE)
        {
            if($id == FALSE)
            {
                $query = $this->db->get("Events");
                return $query->result_array();
            }
            $query = $this->db->get_where("Events", array('id' => $id));
            return $query->row_array();        
        }
    }
?>