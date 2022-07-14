<?php defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
    }

    public function index()
    {
        $data['judul'] = "Penerimaan Paket Masuk";
        $data['judul2'] = "Kantor Cabang C29";
        $data['datapaket'] = $this->app_model->tampil_data()->result();
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }

    public function tampil()
    {
        $data['judul'] = "Penerimaan Paket Masuk";
        $data['judul2'] = "Kantor Cabang C29";
        $data['datapaket'] = $this->app_model->tampil_data()->result();
        $this->load->view('v_header', $data);
        $this->load->view('v_tampil', $data);
        $this->load->view('v_footer', $data);
    }

    public function tambah(){
        $data['judul'] = "Penerimaan Paket Masuk";
        $data['judul2'] = "Kantor Cabang C29";
        $this->load->view('v_header', $data);
        $this->load->view('v_tambah', $data);
        $this->load->view('v_footer', $data);
    }
    public function Insert(){
        $data = array(
            'noresi' => $this->input->post('noresi', true),
            'tanggalmasuk' => $this->input->post('tanggalmasuk', true),
            'jenisbarang' => $this->input->post('jenisbarang', true),
            'jenispengiriman' => $this->input->post('jenispengiriman', true),
            'namapengirim' => $this->input->post('namapengirim', true),
            'teleponpengirim' => $this->input->post('teleponpengirim', true),
            'namapenerima' => $this->input->post('namapenerima', true),
            'teleponpenerima' => $this->input->post('teleponpenerima', true),
            'alamatpenerima' => $this->input->post('alamatpenerima', true),
            'statuspengiriman' => $this->input->post('statuspengiriman', true));
        $insert = $this->app_model->Prosesinsert('datapaket', $data);
        if ($insert > 0) {
            redirect('web/tampil');
        } else {
            echo "Gagal Menyimpan.. Silahkan Cek Data Kembali";
        }
    }
    public function hapus($noresi){
        $this->app_model->M_hapus($noresi);
        redirect('web/tampil');
    }

    public function edit($noresi) // METHOD UNTUK EDIT DATA DARI TABLE datapaket
    {
        $where = array('noresi'=> $noresi);
        $data['judul'] = " Update Data Penerimaan Paket Masuk";
        $data['judul2'] = "Kantor Cabang C29";
        $data['datapaket'] = $this->app_model->ubah_data($where, 'datapaket')->result();
        $this->load->view('v_header', $data);
        $this->load->view('edit_data', $data);
        $this->load->view('v_footer', $data);
    }

    public function update() // METHOD UNTUK UPDATE DATA PADA TABLE datapaket
    {
        $noresi = $this->input->post('noresi');
        $tanggalmasuk = $this->input->post('tanggalmasuk');
        $jenisbarang = $this->input->post('jenisbarang');
        $jenispengiriman = $this->input->post('jenispengiriman');
        $namapengirim = $this->input->post('namapengirim');
        $teleponpengirim = $this->input->post('teleponpengirim');
        $namapenerima = $this->input->post('namapenerima');
        $teleponpenerima = $this->input->post('teleponpenerima');
        $alamatpenerima = $this->input->post('alamatpenerima');
        $statuspengiriman = $this->input->post('statuspengiriman');

        $data = array('tanggalmasuk'=>$tanggalmasuk, 'jenisbarang'=>$jenisbarang, 'jenispengiriman'=>$jenispengiriman, 'namapengirim'=>$namapengirim, 'teleponpengirim'=>$teleponpengirim, 'namapenerima'=>$namapenerima, 'namapenerima'=>$namapenerima, 'teleponpenerima'=>$teleponpenerima, 'alamatpenerima'=>$alamatpenerima, 'statuspengiriman'=>$statuspengiriman );
        $where = array('noresi'=> $noresi);
        $this->app_model->update_data($where,$data,'datapaket');
        redirect('web/tampil');
    }
}
