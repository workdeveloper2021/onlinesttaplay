<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	
    public function index(){	
		$this->load->view('front/index.php');
	}

    public function add(){	
		$this->load->view('front/add.php');
	}

	public function bid_his(){	
		$this->load->view('front/bid_his.php');
	}

    public function game_rate(){	
		$this->load->view('front/game_rate.php');
	}

    public function googlepay(){	
		$this->load->view('front/googlepay.php');
	}

    public function password(){	
		$this->load->view('front/password.php');
	}

    public function paytm(){	
		$this->load->view('front/paytm.php');
	}

    public function phonepe(){	
		$this->load->view('front/phonepe.php');
	}

    public function profile(){	
		$this->load->view('front/profile.php');
	}

    public function statemant(){	
		$this->load->view('front/statemant.php');
	}

    public function transfer(){	
		$this->load->view('front/transfer.php');
	}
    
    public function winning(){	
		$this->load->view('front/winning.php');
	}
    
    public function wallet(){	
		$this->load->view('front/wallet.php');
	}


}