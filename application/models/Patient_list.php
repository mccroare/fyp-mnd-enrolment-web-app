




<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Patient_list extends CI_Model
{

  public function insert_patient( $patient_details )
  {
    $this->db->insert('patient', $patient_details);
  }

  public function insert_patient_criteria($p_sex, $p_dob, $p_site_of_onset,  $p_diagnosis, $p_el_escorial, $p_date_of_diagnosis, $p_vital_capacity, $p_alsfrs_score, $p_k_c_stage)
  {
    $this->db->insert('patients_criteria', $p_sex);
    $this->db->insert('patients_criteria', $p_dob);
    $this->db->insert('patients_criteria', $p_site_of_onset);
    $this->db->insert('patients_criteria', $p_diagnosis);
    $this->db->insert('patients_criteria', $p_el_escorial);
    $this->db->insert('patients_criteria', $p_date_of_diagnosis);
    $this->db->insert('patients_criteria', $p_vital_capacity);
    $this->db->insert('patients_criteria', $p_alsfrs_score);
    $this->db->insert('patients_criteria', $p_k_c_stage);
  }




}
