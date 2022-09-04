
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing_page extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// Set model here e.g:
		// $this->load->model('official/Landing_page_model', 'LP');
	}

	public function index()
	{
		$data = [
			'title'               => 'Beasiswa Bank Indonesia Lampung | beasiswabilampung.com',
			// Set consume data here from model in constructor e.g
			// 'about'               => $this->LP->GetAbout()->row(),
			// 'benefits'            => $this->LP->GetBenefit()->result(),
			// 'contact'             => $this->LP->GetContact()->row(),
			// 'faqs_left'           => $this->LP->GetFaqs(0)->result(),
			// 'faqs_right'          => $this->LP->GetFaqs(1)->result(),
			// 'scholarship_stages'  => $this->LP->GetScholarshipStages()->result(),
			// 'university'          => $this->LP->GetUniversity()->result(),
			// 'articles'            => $this->LP->GetArticles(3),
		];

		$page = '/official/index';
		// form helper
		pageOfficial($page, $data);
	}
}
