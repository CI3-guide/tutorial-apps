<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller
{
    public function index()
    {
        $this->load->model("task_model");
        $this->load->library("form_validation");

        $this->form_validation->set_rules('task', 'タスク', 'required|min_length[5]|max_length[20]');

        if ($this->form_validation->run()) {
            $this->task_model->create_task(set_value("task"));
            $data["create"] = true;
        }elseif($_SERVER["REQUEST_METHOD"] == "POST"){
            $data["create"] = false;
        }
        $data["task_list"] = $this->task_model->get_task_list();
        $this->load->view("task/index",$data);
    }
}