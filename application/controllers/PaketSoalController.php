<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PaketSoalController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_paketSoal', 'paket');
    }
    public function index()
    {
        $anjab = $this->paket->get();
        echo json_encode($anjab);
    }

    public function store()
    {
        if ($this->input->post()) {
            $status = $this->paket->store($this->input->post());
            echo json_encode([
                'status' => 200,
                'message' => 'success',
                'models' => $status,
            ]);
        }
    }

    public function update()
    {
        if ($this->input->post()) {
            $status = $this->paket->update($this->input->post());
            echo json_encode([
                'status' => 200,
                'message' => 'success',
                'models' => $status,
            ]);
        }
    }
    public function destroy($id)
    {
        $status = $this->paket->destroy($id);
        echo json_encode([
            'status' => 200,
            'message' => 'success',
            'models' => $status,
        ]);
    }
}
