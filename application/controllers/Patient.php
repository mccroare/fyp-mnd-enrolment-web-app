<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Patient extends CI_Controller{

  public function __construct()
  {
    parent:: __construct();
    $this->load->model('Patient_list');
  }

  public function index()
  {
    $this->load->view('dash/patient_list');
  }

  public function dashboard()
  {
    $this->load->view('dash/dashboard');
  }

  public function add_patient()
  {
    $this->load->view('dash/add_patient');
  }

  public function add_patient_process()
  {
    if ( $this->input->post('add_patient'))
    {
      $patient_id = $this->input->post('patient_id');
      $patient_name = $this->input->post('patient_name');
      $sex = $this->input->post('sex');
      $dob = $this->input->post('dob');
      $site_of_onset = $this->input->post('site_of_onset');
      $diagnosis = $this->input->post('diagnosis');
      $el_escorial =$this->input->post('el_escorial');
      $date_of_diagnosis = $this->input->post('date_of_diagnosis');
      $vital_capacity = $this->input->post('vital_capacity');
      $alsfrs_score = $this->input->post('alsfrs_score');
      $k_c_stage = $this->input->post('kings_college_stage');


      $patient_details = array(
        'patient_id' => $patient_id,
        'full_name' => $patient_name
      );

      $p_sex = array(
       'patient_id' => $patient_id,
       'criteria_id' => '1',
       'criteria_value' => $sex
      );

      $p_dob = array(
       'patient_id' => $patient_id,
       'criteria_id' => '2',
       'criteria_value' => $dob
      );

      $p_site_of_onset = array(
       'patient_id' => $patient_id,
       'criteria_id' => '3',
       'criteria_value' => $site_of_onset
      );

      $p_diagnosis = array(
       'patient_id' => $patient_id,
       'criteria_id' => '4',
       'criteria_value' => $diagnosis
      );

      $p_el_escorial = array(
       'patient_id' => $patient_id,
       'criteria_id' => '5',
       'criteria_value' => $el_escorial
      );

      $p_date_of_diagnosis = array(
       'patient_id' => $patient_id,
       'criteria_id' => '6',
       'criteria_value' => $date_of_diagnosis
      );

      $p_vital_capacity = array(
       'patient_id' => $patient_id,
       'criteria_id' => '7',
       'criteria_value' => $vital_capacity
      );

      $p_alsfrs_score = array(
       'patient_id' => $patient_id,
       'criteria_id' => '8',
       'criteria_value' => $alsfrs_score
      );

      $p_k_c_stage = array(
       'patient_id' => $patient_id,
       'criteria_id' => '9',
       'criteria_value' => $k_c_stage
      );



      $this->Patient_list->insert_patient( $patient_details );
      $this->Patient_list->insert_patient_criteria($p_sex, $p_dob, $p_site_of_onset,  $p_diagnosis, $p_el_escorial, $p_date_of_diagnosis, $p_vital_capacity, $p_alsfrs_score, $p_k_c_stage);
      redirect('patient', 'refresh');
    }
  }


}
