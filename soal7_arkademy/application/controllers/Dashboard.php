<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	   $this->load->model("hobby_model");
	   $this->load->library('form_validation');
	   $this->load->helper('form');
	   $this->load->helper('security');
	   $this->load->helper('file');
	   $this->load->library('session');
	   date_default_timezone_set('Asia/Jakarta');
   }

   public function index()
   {
	   $data['data_hobby'] = $this->hobby_model->getAll();
	   $data['data_list_hobby'] = $this->hobby_model->getHobby();
	   $data['data_list_category'] = $this->hobby_model->getCategory();
	   
	   $this->load->view('dashboard_hobby',$data);
   }

   public function update_status_product(){
	   $post['status'] 		= 1; 
	   $post['product_id']		= $this->input->post('product_id');
	   $post['updated_by']  	= 1; 
	   $save = $this->hobby_model->update_product($post);

	   if($save){
		   $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
	   }else{
		   $this->session->set_flashdata('error', 'Terjadi Kesalahan Saat Mencoba Mengirim Data!');
	   }

	   redirect('/product', 'refresh');
   }

   public function save(){
	   // echo $this->input->post('category_id');
	   $hobby_model 	= $this->hobby_model;
	   $validation	 	= $this->form_validation;
	   $validation->set_rules($hobby_model->rules());

	   if($validation->run()){
		   $post['name']  		= $this->input->post('name');
		   $post['hobby']  		= $this->input->post('hobby');
		   $post['category']  	= $this->input->post('category');			

		   if($this->input->post('id') != ""){
			   // Update 
			   $post['id']  		= $this->input->post('id');
			   $save = $hobby_model->update($post);
		   }else{
			   // Insert
			   $save = $hobby_model->save($post);
		   }


		   if($save){
			   $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
		   }else{
			   $this->session->set_flashdata('error', 'Terjadi Kesalahan Saat Mencoba Mengirim Data!');
		   }
		   
	   }else{
		   $this->session->set_flashdata('error', 'Validasi Gagal! Mohon inputkan data dengan benar! '. validation_errors());
	   }
	//    redirect('/dashboard', 'refresh');
   }

   public function delete_siswa($id = null)
   {
		   if($id != null){
			   $post['id'] 	= $id;
			   $save 		= $this->hobby_model->delete($post);

			if($save){
				   $this->session->set_flashdata('success', "Data Berhasil dihapus");
			 }else{
				   $this->session->set_flashdata('error', 'Terjadi Kesalahan Saat Mencoba Mengirim Data!');
			   }
				   
		   }else{
			   $this->session->set_flashdata('error', 'Delete Error');
		   }

		redirect('dashboard/', 'refresh');
   }
}
