<?php
defined('BASEPATH') OR exit('No direct script access allowed');



public function __construct()
{
  parent::__construct();
  $this->load->model('Clinical_Trials');
}

public function update_trial( $trial_id)
{
  $this->load->view('dash/update_trial', $trial_id);
}
