


<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Clinical_Trials extends CI_Model
{

  public function add_trial( $trial_details )
  {
    $this->db->insert('trial_details', $trial_details);
  }

  public function add_trial_criteria( $trial_criteria, $trial_criteria_min_dob, $trial_criteria_max_dob)
  {
    $this->db->insert('trial_criteria', $trial_criteria);
    $this->db->insert('trial_criteria', $trial_criteria_min_dob);
    $this->db->insert('trial_criteria', $trial_criteria_max_dob);
  }

  public function add_trial_kc( $trial_criteria_k_c_value )
  {
    $this->db->insert('trial_criteria', $trial_criteria_k_c_value);
  }

  public function add_trial_patients( $trial_p )
  {
    $this->db->insert('trial_patients', $trial_p);
  }


}
