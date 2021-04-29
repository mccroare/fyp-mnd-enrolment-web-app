<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Trials extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Clinical_Trials');
  }

  public function index()
  {
    $this->load->view('dash/add_trial');
  }

  public function view_trials()
  {
    $this->load->view('dash/trial_list');
  }

  public function add_trial()
  {
    if ( $this->input->post('add_trial') )
    {
      $trial_id = $this->input->post('trial_id');
      $trial_version = $this->input->post('trial_version');
      $public_title = $this->input->post('public_title');
      $minimum_dob = $this->input->post('minimum_dob');
      $maximum_dob = $this->input->post('maximum_dob');
      $sex = $this->input->post('sex');
      $site_one = $this->input->post('site_one');
      $site_two = $this->input->post('site_two');
      $site_three = $this->input->post('site_three');
      $site_four = $this->input->post('site_four');
      $diagnosis_als = $this->input->post('diagnosis_als');
      $diagnosis_alsftd = $this->input->post('diagnosis_alsftd');
      $diagnosis_pls = $this->input->post('diagnosis_pls');
      $diagnosis_kennedys = $this->input->post('diagnosis_kennedys');
      $diagnosis_pbp = $this->input->post('diagnosis_pbp');
      $diagnosis_unknown = $this->input->post('diagnosis_unknown');
      $el_suspected = $this->input->post('el_suspected');
      $el_possible = $this->input->post('el_possible');
      $el_lab_supported = $this->input->post('el_lab_supported');
      $el_probable = $this->input->post('el_probable');
      $el_definite = $this->input->post('el_definite');
      $min_date_of_diagnosis = $this->input->post('min_date_of_diagnosis');
      $max_date_of_diagnosis = $this->input->post('max_date_of_diagnosis');
      $min_vital_capacity = $this->input->post('min_vital_capacity');
      $max_vital_capacity = $this->input->post('max_vital_capacity');
      $min_alsfrs_score = $this->input->post('min_alsfrs_score');
      $max_alsfrs_score = $this->input->post('max_alsfrs_score');
      $k_c_one = $this->input->post('k_c_one');
      $k_c_two_a = $this->input->post('k_c_two_a');
      $k_c_two_b = $this->input->post('k_c_two_b');
      $k_c_three = $this->input->post('k_c_three');
      $k_c_four_a = $this->input->post('k_c_four_a');
      $k_c_four_b = $this->input->post('k_c_four_b');

      $trial_details = array(
        'trial_id' => $trial_id,
        'trial_version' => $trial_version,
        'public_title' => $public_title
      );

      $this->Clinical_Trials->add_trial($trial_details);

      $trial_criteria = array(
        'trial_id' => $trial_id,
        'trial_version' => $trial_version,
        'criteria_id' => 1,
        'criteria_value' => $sex
      );

      // Min DOB
      $trial_criteria_min_dob = array(
        'trial_id' => $trial_id,
        'trial_version' => $trial_version,
        'criteria_id' => 10,
        'criteria_value' => $minimum_dob
      );

      // Max DOB
      $trial_criteria_max_dob = array(
        'trial_id' => $trial_id,
        'trial_version' => $trial_version,
        'criteria_id' => 11,
        'criteria_value' => $maximum_dob
      );

      $this->Clinical_Trials->add_trial_criteria($trial_criteria, $trial_criteria_min_dob, $trial_criteria_max_dob);

      // Site of Onset
      if($site_one == "Bulbar"){
        $trial_site_one = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '3',
          'criteria_value' => $site_one
        );
        $this->Clinical_Trials->add_trial_kc($trial_site_one);
      }

      if($site_two == "Spinal"){
        $trial_site_two = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '3',
          'criteria_value' => $site_two
        );
        $this->Clinical_Trials->add_trial_kc($trial_site_two);
      }

      if($site_three == "Thoracic/ Respiratory"){
        $trial_site_three = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '3',
          'criteria_value' => $site_three
        );
        $this->Clinical_Trials->add_trial_kc($trial_site_three);
      }

      if($site_four == "Cognitive/ Behavioural"){
        $trial_site_four = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '3',
          'criteria_value' => $site_four
        );
        $this->Clinical_Trials->add_trial_kc($trial_site_four);
      }

      // Diagnosis
      if($diagnosis_als == "ALS"){
        $trial_diagnosis = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '4',
          'criteria_value' => $diagnosis_als
        );
        $this->Clinical_Trials->add_trial_kc($trial_diagnosis);
      }

      if($diagnosis_alsftd == "ALSFTD"){
        $trial_diagnosis = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '4',
          'criteria_value' => $diagnosis_alsftd
        );
        $this->Clinical_Trials->add_trial_kc($trial_diagnosis);
      }

      if($diagnosis_pls == "PLS"){
        $trial_diagnosis = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '4',
          'criteria_value' => $diagnosis_pls
        );
        $this->Clinical_Trials->add_trial_kc($trial_diagnosis);
      }

      if($diagnosis_kennedys == "Kennedys"){
        $trial_diagnosis = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '4',
          'criteria_value' => $diagnosis_kennedys
        );
        $this->Clinical_Trials->add_trial_kc($trial_diagnosis);
      }

      if($diagnosis_pbp == "PBP"){
        $trial_diagnosis = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '4',
          'criteria_value' => $diagnosis_pbp
        );
        $this->Clinical_Trials->add_trial_kc($trial_diagnosis);
      }

      if($diagnosis_unknown == "Unknown"){
        $trial_diagnosis = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '4',
          'criteria_value' => $diagnosis_unknown
        );
        $this->Clinical_Trials->add_trial_kc($trial_diagnosis);
      }

      // El Escorial
      if($el_suspected == "Suspected"){
        $trial_el = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '5',
          'criteria_value' => $el_suspected
        );
        $this->Clinical_Trials->add_trial_kc($trial_el);
      }

      if($el_possible == "Possible"){
        $trial_el = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '5',
          'criteria_value' => $el_possible
        );
        $this->Clinical_Trials->add_trial_kc($trial_el);
      }

      if($el_lab_supported == "Lab Supported Probable"){
        $trial_el = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '5',
          'criteria_value' => $el_lab_supported
        );
        $this->Clinical_Trials->add_trial_kc($trial_el);
      }

      if($el_probable == "Probable"){
        $trial_el = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '5',
          'criteria_value' => $el_probable
        );
        $this->Clinical_Trials->add_trial_kc($trial_el);
      }

      if($el_definite == "Definite"){
        $trial_el = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '5',
          'criteria_value' => $el_definite
        );
        $this->Clinical_Trials->add_trial_kc($trial_el);
      }

      // Min Date of Diagnosis
      if($min_date_of_diagnosis != ""){
        $trial_dod = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '12',
          'criteria_value' => $min_date_of_diagnosis
        );
        $this->Clinical_Trials->add_trial_kc($trial_dod);
      }

      // Max Date of Diagnosis
      if($max_date_of_diagnosis != ""){
        $trial_dod = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '13',
          'criteria_value' => $max_date_of_diagnosis
        );
        $this->Clinical_Trials->add_trial_kc($trial_dod);
      }

      // Min Vital Capacity
      if($min_vital_capacity != ""){
        $trial_v_c = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '14',
          'criteria_value' => $min_vital_capacity
        );
        $this->Clinical_Trials->add_trial_kc($trial_v_c);
      }

      // Max Vital Capacity
      if($max_vital_capacity != ""){
        $trial_v_c = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '15',
          'criteria_value' => $max_vital_capacity
        );
        $this->Clinical_Trials->add_trial_kc($trial_v_c);
      }

      // Min ALSFRS-R Total
      if($min_alsfrs_score != ""){
        $trial_als_score = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '16',
          'criteria_value' => $min_alsfrs_score
        );
        $this->Clinical_Trials->add_trial_kc($trial_als_score);
      }


      // Max ALSFRS-R Total
      if($max_alsfrs_score != ""){
        $trial_als_score = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '17',
          'criteria_value' => $max_alsfrs_score
        );
        $this->Clinical_Trials->add_trial_kc($trial_als_score);
      }


      // King's College Staging
      if($k_c_one == "1"){
        $trial_k_c_one = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '9',
          'criteria_value' => $k_c_one
        );
        $this->Clinical_Trials->add_trial_kc($trial_k_c_one);
      }

      if($k_c_two_a == "2A"){
        $trial_k_c_two_a = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '9',
          'criteria_value' => $k_c_two_a
        );
        $this->Clinical_Trials->add_trial_kc($trial_k_c_two_a);
      }

      if($k_c_two_b == "2B"){
        $trial_k_c_two_b = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '9',
          'criteria_value' => $k_c_two_b
        );
        $this->Clinical_Trials->add_trial_kc($trial_k_c_two_b);
      }

      if($k_c_three == "3"){
        $trial_k_c_three = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '9',
          'criteria_value' => $k_c_three
        );
        $this->Clinical_Trials->add_trial_kc($trial_k_c_three);
      }

      if($k_c_four_a == "4A"){
        $trial_k_c_four_a = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '9',
          'criteria_value' => $k_c_four_a
        );
        $this->Clinical_Trials->add_trial_kc($trial_k_c_four_a);
      }

      if($k_c_four_b == "4B"){
        $trial_k_c_four_b = array(
          'trial_id' => $trial_id,
          'trial_version' => $trial_version,
          'criteria_id' => '9',
          'criteria_value' => $k_c_four_b
        );
        $this->Clinical_Trials->add_trial_kc($trial_k_c_four_b);
      }


      $trial_criteria = $this->db->get_where('trial_criteria', array('trial_id' => $trial_id, 'trial_version'  => $trial_version));
      $false_id_array = array();
      $match = "True";
      $count = "0";
      $p_id = "0";
      $patient_details = $this->db->get('patient');
      foreach($patient_details->result() as $patient)
      {
        echo print_r($patient);
        $criteria_count = 0;
        $check_count = 0;
        $match = "True";
        $p_id = $patient->patient_id;
        $p_c = $this->db->get_where('patients_criteria', array('patient_id' => $p_id));
        foreach($p_c->result() as $p)
        {
          //echo $p->criteria_value;
          $criteria_count++;
        }
        foreach($p_c->result() as $p)
        {

          $check_count++;
          if($check_count != ($criteria_count+1))
          {

            foreach($trial_criteria->result() as $trial)
            {
              foreach($false_id_array as $false)
              {
                if($p_id == $false)
                {
                  $match = "False";
                }
              }
              if($match == "True")
              {
                // CHECK sex, site of onset, diagnosis, el,escorial, kings college stage
                if($p->criteria_id == $trial->criteria_id)
                {
                  // CHECK SEX
                  if($p->criteria_id == "1")
                  {
                    $match = "False";
                    if($trial->criteria_value == $p->criteria_value)
                    {
                      $match = "True";
                    }
                    if($trial->criteria_value == "Both" and $p->criteria_value == "Male")
                    {
                      $match = "True";
                    }
                    if($trial->criteria_value == "Both" and $p->criteria_value == "Female")
                    {
                      $match = "True";
                    }
                    if($match == "False")
                    {
                        array_push($false_id_array, $p_id);
                    }
                  }

                  // CHECK SITE OF ONSET
                  if($p->criteria_id == "3")
                  {
                      $site_array = array();
                      foreach($trial_criteria->result() as $t)
                      {
                          if($t->criteria_id == "3")
                          {
                              array_push($site_array, $t->criteria_value);
                          }
                      }
                      $true_count = 0;
                      foreach($site_array as $site_value)
                      {
                          if($p->criteria_value == $site_value)
                          {
                              $true_count++;
                          }
                      }
                      if($true_count != 0)
                      {
                        $match = "True";
                      }
                      else
                      {
                          array_push($false_id_array, $p_id);
                      }
                  }


                  // CHECK DIAGNOSIS
                  if($p->criteria_id == "4")
                  {
                      $diagnosis_array = array();
                      foreach($trial_criteria->result() as $t)
                      {
                          if($t->criteria_id == "4")
                          {
                              array_push($diagnosis_array, $t->criteria_value);
                          }
                      }
                      $true_count = 0;
                      foreach($diagnosis_array as $diagnosis_value)
                      {
                          //echo $diagnosis_value;
                          if($p->criteria_value == $diagnosis_value)
                          {
                              $true_count++;
                          }
                      }
                      if($true_count != 0)
                      {
                        $match = "True";
                      }
                      else
                      {
                          array_push($false_id_array, $p_id);
                      }
                  }

                  // CHECK EL ESCORIAL
                  if($p->criteria_id == "5")
                  {
                      $el_array = array();
                      foreach($trial_criteria->result() as $t)
                      {
                          if($t->criteria_id == "5")
                          {
                              array_push($el_array, $t->criteria_value);
                          }
                      }
                      $true_count = 0;
                      foreach($el_array as $el_value)
                      {
                          if($p->criteria_value == $el_value)
                          {
                              $true_count++;
                          }
                      }
                      if($true_count != 0)
                      {
                        $match = "True";
                      }
                      else
                      {
                          array_push($false_id_array, $p_id);
                      }
                  }

                  // KINGS COLLEGE STAGE
                  if($p->criteria_id == "9")
                  {
                      $kings_array = array();
                      foreach($trial_criteria->result() as $t)
                      {
                          if($t->criteria_id == "9")
                          {
                              array_push($kings_array, $t->criteria_value);
                          }
                      }
                      $true_count = 0;
                      foreach($kings_array as $kings_value)
                      {
                          if($p->criteria_value == $kings_value)
                          {
                              $true_count++;
                          }
                      }
                      if($true_count != 0)
                      {
                        $match = "True";
                      }
                      else
                      {
                          array_push($false_id_array, $p_id);
                      }
                  }
                }

                // CHECK DATE OF BIRTH
                if($p->criteria_id == "2")
                {
                    if($trial->criteria_id == "10")
                    {
                        if($p->criteria_value >= $trial->criteria_value)
                        {
                          $match = "True";
                        }
                        else
                        {
                            array_push($false_id_array, $p_id);
                        }
                    }
                    if($trial->criteria_id == "11")
                    {
                        if($trial->criteria_value >= $p->criteria_value)
                        {
                          $match = "True";
                        }
                        else
                        {
                            array_push($false_id_array, $p_id);
                        }

                    }
                }

                // CHECK DATE OF DIAGNOSIS
                if($p->criteria_id == "6")
                {
                    if($trial->criteria_id == "12")
                    {
                        if($p->criteria_value >= $trial->criteria_value)
                        {
                          $match = "True";
                        }
                        else
                        {
                            array_push($false_id_array, $p_id);
                        }
                    }
                    if($trial->criteria_id == "13")
                    {
                        if($trial->criteria_value >= $p->criteria_value)
                        {
                          $match = "True";
                        }
                        else
                        {
                            array_push($false_id_array, $p_id);
                        }

                    }
                }

                // CHECK VITAL CAPACITY
                if($p->criteria_id == "7")
                {
                    if($trial->criteria_id == "14")
                    {
                        if($p->criteria_value >= $trial->criteria_value)
                        {
                          $match = "True";
                        }
                        else
                        {
                            array_push($false_id_array, $p_id);
                        }
                    }
                    if($trial->criteria_id == "15")
                    {
                        if($trial->criteria_value >= $p->criteria_value)
                        {
                          $match = "True";
                        }
                        else
                        {
                            array_push($false_id_array, $p_id);
                        }

                    }
                }

                // CHECK ALSFRS_R TOTAL SCORE
                if($p->criteria_id == "8")
                {
                    if($trial->criteria_id == "16")
                    {
                        if($p->criteria_value >= $trial->criteria_value)
                        {
                          $match = "True";
                        }
                        else
                        {
                            array_push($false_id_array, $p_id);
                        }
                    }
                    if($trial->criteria_id == "17")
                    {
                        if($trial->criteria_value >= $p->criteria_value)
                        {
                          $match = "True";
                        }
                        else
                        {
                            array_push($false_id_array, $p_id);
                        }

                    }
                }

              }
            }
          }
        }

        if($match == "True")
        {
          $trial_p = array(
            'trial_id' => $trial_id,
            'trial_version' => $trial_version,
            'patient_id' => $p_id
           );
          $this->Clinical_Trials->add_trial_patients($trial_p);
        }

        }

      // Redirect to list of trials when form is submitted
      redirect('trials/view_trials', 'refresh');
    }
  }


  public function update_trial( $trial_id)
  {
    $this->load->view('dash/update_trial', $trial_id);
  }


  public function update_process_trial($trial_id)
  {
    if ( $this->input->post('update_trial'))
    {
      $trial_name = $this->input->post('trial_name');
      $trial_c_dob = $this->input->post('trial_c_dob');
      $trial_c_gender = $this->input->post('trial_c_gender');


      $trial_details = array(
        'trial_name' => $trial_name,
        'trial_c_dob' => $trial_c_dob,
        'trial_c_gender' => $trial_c_gender
      );

      $this->db->where('trial_id', $trial_id);
      $this->db->update('trials', $trial_details);
      redirect('trials/view_trials', 'refresh');
    }
  }


  public function delete_trial( $trial_id )
  {
    $this->db->where('trial_id', $trial_id);
    $this->db->delete('trials');
    redirect('trials/view_trials', 'refresh');
  }


  public function view_selected_trial()
  {
    $this->load->view('dash/selected_trial');
  }

  public function add_trial_patients( $trial_p)
  {
    $this->Clinical_Trials->add_trial_patients($trial_p);
  }



}
