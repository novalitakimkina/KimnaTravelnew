<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$data = $this->mymodel->Getuser();
		$this->load->view('tabel',array('data' => $data));	
		}

	public function insert(){
		$res = $this->mymodel->InsertData('user',array(
				"id" => "1",
				"username" => "NovalitaKL",
				"password" =>"kimnaea",
				"fullname" => "Novalita Kimkina",
				"level" => "1",
			));

			if ($res >= 1){
				echo "<h2>Insert Data Sukses </h2>";
			}else {
				echo "<h2> Insert Data Gagal !! </h2>";
			}
		
	}  

	public function update(){
		$res = $this->mymodel->UpdateData('user',array(
				"username" => "NovalitaKim",
			),array('id' => "1"));

			if ($res >= 1){
				echo "<h2>Update Data Sukses </h2>";
			}else {
				echo "<h2> Update Data Gagal !! </h2>";
			}
	}

	public function delete(){
		$res = $this->mymodel->DeleteData('user',array("id" => "1"));

			if ($res >= 1){
				echo "<h2>Delete Data Sukses </h2>";
			}else {
				echo "<h2> Delete Data Gagal !! </h2>";
			}
	}

	public function panggil(){
		$data =$this->db->query("select * from user");
		/*echo "<pre>";
		print_r($data);
		echo "</pre>"; */
		echo "Jumlah Data =".$data->num_rows(). "<br>";
		$row =$data->row();
		echo "id = ".$row->id."<br>";
		echo "username = ".$row->username."<br>";
		echo "password = ".$row->password."<br>";
		echo "fullname = ".$row->fullname."<br>";
		echo "level = ".$row->level."<br>";
		/*foreach ($data->result_array() as $row ){
			echo "No.Identitas : ".$row['nim']. "<br>";
			echo "Nama : ".$row['nama']. "<br>";
			echo "Alamat : ".$row['alamat']. "<br>";
			echo "<hr/>";
		}*/

	}

}
