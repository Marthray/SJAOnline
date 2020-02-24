<?php

class CDashboard extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function goToDashboard()
  {
     $this->load->view('vDashboard');
  }

}


/* End of file CDashboard.php */
/* Location: ./application/controllers/CDashboard.php */