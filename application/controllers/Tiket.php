<?php
    class Apar extends CI_Controller
        {

            public function __construct()
            {
                parent::__construct() ;
                if ($this->session->userdata('is_login') != true) {
                    redirect('login') ;
                }
                $this->load->model('m_apar') ;
            }

            public function cetak()
            {
                $data['tahun'] = $this->m_apar->gettahun() ;

                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('cetak', $data);
                $this->load->view('templates/footer');
            }

            public function cetak_apar()
            {
                $data['tahun'] = $this->m_apar->gettahun() ;

                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('cetak_apar', $data);
                $this->load->view('templates/footer');
            }

            function filter()
            {
                $tanggalawal    = $this->input->post('tanggalawal') ;
                $tanggalakhir   = $this->input->post('tanggalakhir') ;
                $tahun1         = $this->input->post('tahun1') ;
                $bulanawal      = $this->input->post('bulanawal') ;
                $bulanakhir     = $this->input->post('bulanakhir') ;
                $tahun2         = $this->input->post('tahun2') ;
                $nilaifilter    = $this->input->post('nilaifilter') ;

                    if ($nilaifilter == 1 ) {
                        $data['title'] = "LAPORAN KONDISI APAR" ;
                        $data['subtitle'] = "Tanggal  ".$tanggalawal.' - Tanggal '.$tanggalakhir ;
                        $data['datafilter'] = $this->m_apar->filterbytanggal($tanggalawal, $tanggalakhir) ;

                        $this->load->view('print_tanggal_apar', $data);
                    }
                    elseif ($nilaifilter == 2 ) {
                        $data['title'] = "LAPORAN KONDISI APAR" ;
                        $data['subtitle'] = "Bulan  ".$bulanawal.' - Bulan  '.$bulanakhir.', Tahun  '.$tahun1 ;
                        $data['datafilter'] = $this->m_apar->filterbybulan($tahun1, $bulanawal, $bulanakhir) ;

                        $this->load->view('print_tanggal_apar', $data) ;
                    }
                    elseif ($nilaifilter == 3 ) {
                        $data['title'] = "LAPORAN KONDISI APAR" ;
                        $data['subtitle'] = 'Tahun '.$tahun2 ;
                        $data['datafilter'] = $this->m_apar->filterbytahun($tahun2) ;

                        $this->load->view('print_tanggal_apar', $data) ;
                    }
            }

            public function index()
            {
                if ($this->input->post('submit')) {
                    $data ['keyword'] = $this->input->post('keyword') ;
                    $this->session->set_userdata('keyword', $data['keyword']) ;
                } else {
                    $data['keyword'] = $this->session->userdata('keyword') ;
                }
                
                $config['base_url']     = 'http://localhost/project_ut/apar/index' ;
                $this->db->like('tanggal', $data['keyword']) ;
                $this->db->or_like('nama_apar', $data['keyword']) ;
                $this->db->or_like('arah_jarum', $data['keyword']) ;
                $this->db->or_like('hose', $data['keyword']) ;
                $this->db->or_like('lock_pin', $data['keyword']) ;
                $this->db->or_like('kondisi_apar', $data['keyword']) ;
                $this->db->or_like('keterangan', $data['keyword']) ;
                $this->db->from('tb_apar') ;
                $config['total_rows']   = $this->db->count_all_results() ;
                $data['total_rows'] = $config['total_rows'] ;
                $config['per_page']     = 25 ;

                // Styling
                $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">' ;
                $config['full_tag_close']   = '</ul></nav></div>' ;

                $config['first_link']   = 'First' ;
                $config['first_tag_open']   = '<li class="page-item"><span class="page-link">' ;
                $config['first_tag_close']  = '</li></span>' ;

                $config['last_link']    = 'Last' ;
                $config['last_tag_open']   = '<li class="page-item"><span class="page-link">' ;
                $config['last_tag_close']  = '</li></span>' ;

                $config['next_link']    = '&raquo' ;
                $config['next_tag_open']    = '<li class="page-item"><span class="page-link">' ;
                $config['next_tag_close']   = '<span aria-hidden="true"></span></span></li>' ;

                $config['prev_link']    = '&laquo' ;
                $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">' ;
                $config['prev_tag_close']   = '</li></span>' ;

                $config['cur_tag_open']     = '<li class="page-item active "><span class="page-link">' ;
                $config['cur_tag_close']    = '</li><span>' ;

                $config['num_tag_open']     = '<li class="page-item"><span class="page-link">' ;
                $config['num_tag_close']    = '</li></span>' ;

                // Initialize
                $this->pagination->initialize($config) ;

                $data['start'] = $this->uri->segment(3) ;
                $data['apar'] = $this->m_apar->get_data($config["per_page"], $data['start'], $data['keyword']) ;

                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('apar', $data);
                $this->load->view('templates/footer');

            }
            public function tambah_aksi(){
                $tanggal         = $this->input->post('tanggal');
                $nama_apar       = $this->input->post('nama_apar');
                $arah_jarum      = $this->input->post('arah_jarum');
                $hose            = $this->input->post('hose');
                $lock_pin        = $this->input->post('lock_pin');
                $kondisi_apar    = $this->input->post('kondisi_apar');
                $keterangan      = $this->input->post('keterangan');
                $foto            = $_FILES['foto'];
                    if ($foto=''){}else{
                        $config['upload_path']          = './assets/foto/apar';
                        $config['allowed_types']        = 'png|jpg|jpeg';
                            
                        $this->load->library('upload',$config);
                        if (!$this->upload->do_upload('foto')){
                            // echo "Upload Gambar/Foto Gagal !!"; die();
                            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Mohon Maaf !! </strong> Data Gambar/Foto GAGAL Ter-UPLOAD
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                            redirect ('apar/index');
                        } else {
                            $foto=$this->upload->data('file_name');
                        }
                    }
                $data = array(
                    'tanggal'           => $tanggal,
                    'nama_apar'         => $nama_apar,
                    'arah_jarum'        => $arah_jarum,
                    'hose'              => $hose,
                    'lock_pin'          => $lock_pin,
                    'kondisi_apar'      => $kondisi_apar,
                    'keterangan'        => $keterangan,
                    'foto'              => $foto
                );

                $this->m_apar->input_data($data,'tb_apar');
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Selamat !! </strong> Data Berhasil Di - TAMBAHKAN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect ('apar/index');
            }

            public function hapus($id)
                {
                    $where = array ('id' => $id) ;
                    $this->m_apar->hapus_data($where, 'tb_apar') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - HAPUS (DELETE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect ('apar/index') ;
                }

            public function edit_apar($id)
                {
                    $where = array ('id' => $id) ;
                    $data['apar'] = $this->m_apar->edit_data($where, 'tb_apar')->result() ;

                    $this->load->view('templates/header');
                    $this->load->view('templates/sidebar');
                    $this->load->view('edit_apar', $data);
                    $this->load->view('templates/footer');
                }

            public function update()
                {
                    $id              = $this->input->post('id') ;
                    $tanggal         = $this->input->post('tanggal');
                    $nama_apar       = $this->input->post('nama_apar');
                    $arah_jarum      = $this->input->post('arah_jarum');
                    $hose            = $this->input->post('hose');
                    $lock_pin        = $this->input->post('lock_pin');
                    $kondisi_apar    = $this->input->post('kondisi_apar');
                    $keterangan      = $this->input->post('keterangan');               

                    $data = array (
                    'tanggal'       => $tanggal,
                    'nama_apar'     => $nama_apar,
                    'arah_jarum'    => $arah_jarum,
                    'hose'          => $hose,
                    'lock_pin'      => $lock_pin,
                    'kondisi_apar'  => $kondisi_apar,
                    'keterangan'    => $keterangan,
                    ) ;

                    $where = array (
                        'id' => $id 
                    ) ;
                    
                    $this->m_apar->update_data($where, $data, 'tb_apar') ;
                    $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Selamat !! </strong> Data Berhasil Di - PERBAHARUI (UPDATE)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                        redirect('apar/index') ;
                }
            
            public function detail_apar($id)
                {
                    $this->load->model('m_apar') ;
                    $detail = $this->m_apar->detail_data($id) ;
                    $data['detail_apar'] = $detail ;

                    $this->load->view('templates/header');
                    $this->load->view('templates/sidebar');
                    $this->load->view('detail_apar', $data);
                    $this->load->view('templates/footer');
                }

            public function print_apar()
                {
                    $data['apar'] = $this->m_apar->tampil_data('tb_apar')->result() ;
                    $this->load->view('print_apar', $data);
                }

            public function pdf()
                {
                    // $this->load->library('dompdf_gen');

                    // $data['apar'] = $this->m_pegawai->tampil_data('tb_tamu')->result() ;
                    // $this->load->view('laporan_pdf', $data) ;

                    // $paper_size  = 'A4' ;
                    // $orientation = 'landscape' ;
                    // $html        = $this->output->get_output() ;
                    // $this->dompdf->set_paper($paper_size, $orientation) ;

                    // $this->dompdf->load_html($html) ;
                    // $this->dompdf->render() ;
                    // $this->dompdf->stream("laporan_bbm.pdf", array('Attachment' => 0)) ;
                }

            public function excel()
                {
                    // $data['pegawai'] = $this->m_pegawai->tampil_data('tb_bbm')->result() ;
                }

            public function search()
                {
                    $keyword = $this->input->post('keyword') ;
                    $data['apar']=$this->m_apar->get_keyword($keyword) ;

                    $this->load->view('templates/header');
                    $this->load->view('templates/sidebar');
                    $this->load->view('apar', $data);
                    $this->load->view('templates/footer');
                }
        }