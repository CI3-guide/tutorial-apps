<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller
{
    public function index()
    {
        $this->load->model("task_model");
        $this->load->library("form_validation");

        if($this->input->post()){
            $this->form_validation->set_rules('task', 'タスク', "required|min_length[5]|max_length[20]");

            if ($this->form_validation->run()) {
                $this->task_model->create($this->input->post("task"));
                $data["create"] = true;
            }else {
                $data["create"] = false;
            }

        }

        $data["task_list"] = $this->task_model->lists();
        $this->load->view("tutorial/task",$data);
    }
}