
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
public function index()
	{
		$this->load->view('welcome_message');

	}http://localhost/phpmyadmin/db_structure.php?server=1&db=testdata&token=99a0557c7af0cc0dccf0855890f48ff1
	 */

public function mypage()
{
$student = [ 
"name"=>"John Everyman","email"=>"JEveryman@uclan.ac.uk","course"=>"Computing",
];
$this->load->view('mypage', $student);
	}

public function displayrows(){
$this->load->model('mymodel');
$data['records'] = $this->mymodel->getData();
$this->load->view('display', $data);
}
}


