<?php
    class Cetak extends CI_Controller
        {
            public function index()
            {
                $data['title'] = " Cetak Laporan " ;
                $data['tanggal'] = $this->db->get('tanggal')->result();

                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('print_bulan', $data);
                $this->load->view('templates/footer');

            }

            public function filter($id)
            {
                // $data['jenis_bbm'] = $this->db->get('tb_bbm', ['jenis-bbm'=>$id])->
                //     result() ;

                // $this->load->view('hasil_cetak', $data);
            }
        }