<?php
class Tugas_uts extends CI_Controller
{
	public function index() 
	
	{ 
		$this->load->view('tugas_uts/view-form');
	} 
	public function cetak() 
	{ 
		$this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[3]', [ 'required' => 'Nama Siswa Harus diisi', 'min_length' => 'Nama terlalu pendek' ]);
		$this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [ 'required' => 'NIS Harus diisi', 'min_length' => 'NIS terlalu pendek' ]);
		$this->form_validation->set_rules('kls', 'Kelas', 'required|min_length[3]', [ 'required' => 'Kelas Harus diisi', 'min_length' => 'Kelas harus sesuai' ]);
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|min_length[3]', [ 'required' => 'Tanggal Lahir Harus diisi', 'min_length' => 'Tanggal Lahir tidak sesuai format' ]);
		$this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required|min_length[3]', [ 'required' => 'Tempat Lahir Harus diisi', 'min_length' => 'Tempat Lahir harus jelas' ]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]', [ 'required' => 'Alamat Harus diisi', 'min_length' => 'Alamat harus jelas' ]);
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|min_length[3]', [ 'required' => 'Jenis Kelamin Harus dipilih', 'min_length' => 'Jenis Kelamin tidak boleh kosong' ]);
		$this->form_validation->set_rules('agama', 'Agama', 'required|min_length[3]', [ 'required' => 'Agama Harus dipilih', 'min_length' => 'Agama tidak boleh kosong' ]);
		if ($this->form_validation->run() != true) { 
		$this->load->view('tugas_uts/view-form'); 
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'nis' => $this->input->post('nis'),
				'kls' => $this->input->post('kls'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'tmpt_lhr' => $this->input->post('tmpt_lhr'),
				'alamat' => $this->input->post('alamat'),
				'jk' => $this->input->post('jk'),
				'agama' => $this->input->post('agama'),
			];
		
			$this->load->view('tugas_uts/view-data', $data);
		}
	}
}