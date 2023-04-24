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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$post_url = BACKEND_URL	. 'website/get_service_videos';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $post_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		curl_close($ch);
		


		$data['videos'] = json_decode($result)->videos;
			
		$this->load->view('index', $data);
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function media()
	{
		$this->load->view('videos');
	}
	public function donation()
	{
		$this->load->view('donation');
	}
	public function service()
	{
		$this->load->view('service');
	}
	public function education_service()
	{
		$this->load->view('education-service');
	}
	public function plantation_service()
	{
		$this->load->view('plantation-service');
	}
	public function renewable_energy_service()
	{
		$this->load->view('renewable-energy-service');
	}
	public function jall_sudh_service()
	{
		$this->load->view('jall-sudh-service');
	}
	public function waste_recycle_service()
	{
		$this->load->view('waste-recycle-service');
	}
	public function empowerment_service()
	{
		$this->load->view('empowerment-service');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function signup(){
		$this->load->view('signup');
	}
}
