<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function index()
	{
		$this->load->view('welcome');
	}

	public function perhitungan()
	{
		$hatchback = $this->hatchback();
		$mpv = $this->mpv();
		$sedan = $this->sedan();

		$data=array(
			'Hatchback'=> $hatchback,
			'mpv'=> $mpv,
			'sedan'=> $sedan
		);
		// echo "Hatchback".$hatchback;
		// echo "mpv".$mpv;
		// echo "sedan".$sedan;
		echo json_encode($data);
	}

	private function hatchback()
	{
		$q2= $this->input->post('q2');
		$q4= $this->input->post('q4');
		$q7= $this->input->post('q7');		
		$min = min($q2, $q4, $q7);
		$hasil = 0.5*$min;
		return $hasil;
	}

	private function mpv()
	{
		$q1= $this->input->post('q1');
		$q3= $this->input->post('q3');		
		$q5= $this->input->post('q5');
		$q6= $this->input->post('q6');		
		$min = min($q1, $q3, $q5, $q6);
		$hasil = 0.7*$min;
		return $hasil;
	}

	private function sedan()
	{
		$q1= $this->input->post('q1');
		$q2= $this->input->post('q2');
		$q5= $this->input->post('q5');
		$q6= $this->input->post('q6');
		$min = min($q1, $q2, $q5, $q6);
		$hasil = 0.7*$min;
		return $hasil;
	}
}
