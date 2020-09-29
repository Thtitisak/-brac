<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function tae(){
		$data = array(
		'รหัสนักศึกษา' => $this->input->post("s_id"),
		'ชื่อ' =>$this->input->post("name"),
		'นามสกุล' =>$this->input->post("lname"),
		'วันที่' =>$this->input->post("date"),
		'เดือน'=>$this->input->post("mont"),
		'ที่อยู่' =>$this->input->post("t3"),
		'ตำบล' =>$this->input->post("t4"),
		'อำเภอ' =>$this->input->post("t5"),
		'จังหวัด' =>$this->input->post("t6"),
		'สาขาวิชาเรียน' =>$this->input->post("t7"),
		'ปีการศึกษา' =>$this->input->post("t8"),
		'บันทึก' =>$this->input->post("submit"),
		);
	$tao["x"]=$data ;
	$this->load->view('show',$tao);
	}
}