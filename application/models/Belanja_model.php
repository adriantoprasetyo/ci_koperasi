<?php

class Belanja_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function get_data()
        {
                // $query = $this->db->get('entries', 10);
                $query = $this->db->get('barang');
                return $query->result();
        }

        public function insert_belanja($data)
        {
                $this->db->insert('belanja', $data);
        }

}

?>