<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Process_forms extends CI_Controller
{	
	protected $gold = 0;
	public function process()
	{
		if($this->session->userdata('gold') || $this->session->userdata('gold') == 0)
		{
			if($this->input->post('action') == "farm")
			{
				$this->gold += rand(10,20);
			}
			else if ($this->input->post('action') == "cave")
			{
				$this->gold += rand(5, 10);
			}
			else if ($this->input->post('action') == "house")
			{
				$this->gold += rand(2,5);
			}
			else if ($this->input->post('action') == "casino")
			{
				if(rand(0,1))
				{
					$this->gold += rand(0,50);
				}
				else
				{
					$this->gold -= rand(0, 50);
				}
			}
			if($this->gold >= 0) {
				$this->session->set_userdata('activities', "<span style=\"color: green\">You entered a " . $this->session->userdata('action') . " and earned " . $this->gold . " golds. (". date('Y/m/d') ." " . date('h:i:sa') . ")</span><br>" . $this->session->userdata('activities'));
			}
			else {
				$this->session->set_userdata('activities', "<span style=\"color: red\">You entered a " . $this->session->userdata('action') . " and lost " . $this->gold . " golds. (". date('Y/m/d') ." " . date('h:i:sa') . ")</span><br>" . $this->session->userdata('activities'));
			}
			$total = $this->session->userdata('gold') + $this->gold;
			$this->session->set_userdata('gold', $total);
		}
		else
		{
			$this->session->set_userdata('gold', 0);
		}
		if($this->input->post('action') == "reset")
		{
			$this->session->sess_destroy();
			redirect('index');
		}
		redirect('home');
	}
}
?>