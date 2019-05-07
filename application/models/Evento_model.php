<?php
    class Evento_model extends CI_Model
    {
        function __construct()
        {
            $this->load->database();
        }

        function insert_evento($data)
        {
            $this->db->insert("Evento", $data);
        }

        function get_eventos($id = FALSE)
        {
            if($id == FALSE)
            {
                $query = $this->db->get("Evento");
                return $query->result_array();
            }
            $query = $this->db->get_where("Evento", array('id' => $id));
            return $query->row_array();        
        }
    }
?>