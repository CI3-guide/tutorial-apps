<?php
class Task_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function lists()
    {
        $per_page = 10; // 1ページあたりの表示数
        $query = $this->db->get("task", $per_page);
        $result = $query->result_array();
        return $result;
    }

    public function create($task)
    {
        $data = ["task_name" => $task];
        $this->db->insert('task', $data);
    }
}
