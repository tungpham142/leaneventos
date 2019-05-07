<?php
    class Event_model extends CI_Model
    {
        function __construct()
        {
            $this->load->database();
        }

        function insert_event($data)
        {
            $this->db->insert("Events", $data);
        }

        function get_event($id = FALSE)
        {
            if($id == FALSE)
            {
                $query = $this->db->get("Events");
                return $query->result_array();
            }
            $query = $this->db->get_where("Events", array('id' => $id));
            return $query->row_array();        
        }

        function delete_event($id)
        {
            $this->db->delete('Events', array('id' => $id));
        }

        function update_event($id, $data)
        {
            $this->db->update('Events', $data, array('id' => $id));
        }
    }
?>