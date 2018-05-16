<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class crud extends CI_Controller {
	public function index(){	

		$jumlah_data = $this->mymodel->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/crud/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['data'] = $this->mymodel->data($config['per_page'],$from);
		$this->load->view('tabel',$data);
	}

	public function add_data(){
		$this->load->view('form_add');	


	}
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('mymodel');
	}
 
		public function do_insert(){
		$id = $_POST ['id'];
		$username = $_POST ['username'];
		$password = $_POST ['password'];
		$fullname = $_POST['fullname'];
		$level = $_POST ['level'];
		$data_insert = array(
				'id' => $id,
				'username' => $username,
				'password' => $password,
				'fullname' => $fullname,
				'level' => $level
			);
			$res = $this->mymodel->InsertData('user',$data_insert);
			if($res>=1){
				$this->session->set_flashdata('pesan','Tambah Data Sukses');
				redirect('crud/index');
				
			}else{
				echo "<h2>Insert Data Gagal</h2>";
			}
	} 

	public function edit_data($id){
		$user = $this->mymodel->Getuser("where id = '$id'");
		$data = array(
			"id" => $user[0]['id'],
			"username" => $user[0]['username'],
			"password" => $user[0]['password'],
			"fullname" => $user[0]['fullname'],
			"level" => $user[0]['level'],
			);
		$this->load->view('form_edit',$data);
	}

	public function do_update(){
		$id = $_POST ['id'];
		$username = $_POST ['username'];
		$password = $_POST['password'];
		$fullname = $_POST['fullname'];
		$level = $_POST['level'];
		$data_update = array(
				'username' => $username,
				'password' => $password,
				'fullname' => $password,
				'level' => $level
			);
			$where = array('id' => $id);
			$res = $this->mymodel->UpdateData('user',$data_update,$where);
			if($res>=1){
				$this->session->set_flashdata('pesan','Update Data Sukses');
				redirect('crud/index');
			}
	}

	public function do_delete($id){
		$where = array('id' => $id);
		$res = $this->mymodel->DeleteData('user',$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Delete Data Sukses');
			redirect('crud/index');
		}
	}

}
