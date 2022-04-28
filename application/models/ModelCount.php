<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ModelCount extends CI_Model
{
    public function countFromTable($table)
    {
        $this->db->from($table);
        return $this->db->count_all_results();
    }

}

/* End of file ModelCount.php */
