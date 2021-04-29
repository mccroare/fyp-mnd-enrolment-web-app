<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( !$_SESSION['u_name'])
{
  redirect('home', 'refresh');
}

$id = $this->uri->segment(3);
$version = $this->uri->segment(4);
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MND CLinical Trial Enrolment</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- dash nav -->
    <?php $this->load->view('dash/inc/nav'); ?>
    <!-- dash nav -->

    <div class="col-lg-3 col-md-3">
      <!-- sidebar -->
      <?php $this->load->view('dash/inc/sidebar'); ?>
      <!-- sidebar -->
    </div>


    <!--dash data -->
    <!-- <div class="container">
      <div class="row">
        <div class="col-log-9 col-md-9">
          <div class="panel panel-primary">
            <div class="panel-heading">Update Trial</div>
            <div class="panel-body">
              <form>

              <?php //echo form_open('trials/update_process_trial/'.$id, 'class="form-horizontal"'); ?>
              <?php
                $trial_list = $this->db->get_where('trial_criteria', array('trial_id' => $id));

                foreach ($trial_list->result() as $trial)
                { ?>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Trial Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="trial_name" class="form-control input-sm" value="<?php echo $trial->trial_name; ?>" placeholder="Trial Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Minimum DOB</label>
                    <div class="col-sm-10">
                      <input type="date" name="trial_c_dob" class="form-control input-sm" value="<?php echo $trial->trial_c_dob; ?>" placeholder="Minimum DOB">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-10">
                      <input type="text" name="trial_c_gender" class="form-control input-sm" value="<?php echo $trial->trial_c_gender; ?>" placeholder="Gender">
                    </div>
                  </div>
                <?php }
                ?>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" name="update_trial" class="btn btn-sm btn-warning" value="Update Trial">
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- dash data-->


    <!-- TRIAL DATA -->

    <div class="container">
      <div class="row">
        <div class="col-log-9 col-md-9">
          <div class="panel panel-primary">
            <div class="panel-heading">Trial Details</div>
            <div class="panel-body">
              <table class="table table-hover">
                <tr>
                  <th>Trial ID</th>
                  <th>Trial Version</th>
                  <th>Public Title</th>
                </tr>

                <?php
                $trial_list = $this->db->get_where('trial_details', array('trial_id' => $id, "trial_version" => $version));
                $trial_criteria = $this->db->get_where('trial_criteria', array('trial_id' => $id, 'trial_version' => $version));

                foreach ($trial_list->result() as $trial)
                {?>
                  <tr>
                    <td><?php echo $trial->trial_id; ?></td>
                    <td><?php echo $trial->trial_version; ?></td>
                    <td><?php echo $trial->public_title; ?></td>
                  </tr>
                <?php
                   $criteria = $trial_criteria->result();
                        $site_array = array();
                        $diagnosis_array = array();
                        $el_array = array();
                        $min_date_diagnosis = "NULL";
                        $max_date_diagnosis = "NULL";
                        $min_vital_capacity = "NULL";
                        $max_vital_capacity = "NULL";
                        $min_als = "NULL";
                        $max_als = "NULL";
                        $kings_array = array();

                        foreach($trial_criteria->result() as $criteria){
                          if($criteria->criteria_id == "1"){
                            $sex = $criteria->criteria_value;
                          }
                          if($criteria->criteria_id == "10"){
                            $min_dob = $criteria->criteria_value;
                          }
                          if($criteria->criteria_id == "11"){
                            $max_dob = $criteria->criteria_value;
                          }
                          if($criteria->criteria_id == "3"){
                            $site_of_onset = $criteria->criteria_value;
                            array_push($site_array, $site_of_onset);
                          }
                          if($criteria->criteria_id == "4"){
                            $diagnosis = $criteria->criteria_value;
                            array_push($diagnosis_array, $diagnosis);
                          }
                          if($criteria->criteria_id == "5"){
                            $el_escorial = $criteria->criteria_value;
                            array_push($el_array, $el_escorial);
                          }
                          if($criteria->criteria_id == "12"){
                            $min_date_diagnosis = $criteria->criteria_value;
                          }
                          if($criteria->criteria_id == "13"){
                            $max_date_diagnosis = $criteria->criteria_value;
                          }
                          if($criteria->criteria_id == "14"){
                            $min_vital_capacity = $criteria->criteria_value;
                          }
                          if($criteria->criteria_id == "15"){
                            $max_vital_capacity = $criteria->criteria_value;
                          }
                          if($criteria->criteria_id == "16"){
                            $min_als = $criteria->criteria_value;
                          }
                          if($criteria->criteria_id == "17"){
                            $max_als = $criteria->criteria_value;
                          }
                          if($criteria->criteria_id == "9"){
                            $kings_college_stage = $criteria->criteria_value;
                            array_push($kings_array, $kings_college_stage);
                          }
                        }

                  ?>

                  <table class="table table-striped table-hover">
                    <tr>
                      <th>Sex</th>
                      <th>Minimum DOB</th>
                      <th>Maximum DOB</th>
                      <th>Site of Onset</th>
                      <th>Diagnosis</th>
                      <th>El Escorial</th>
                    </tr>
                    <tr>
                      <td><?php echo $sex; ?></td>
                      <td><?php echo $min_dob; ?></td>
                      <td><?php echo $max_dob; ?></td>
                      <td><?php if($site_array == "NULL"){ echo "NULL";} else{
                      foreach($site_array as $site_value){ echo "- ",$site_value,"  "; }}?></td>
                      <td><?php if($diagnosis_array == "NULL"){ echo "NULL";} else{
                      foreach($diagnosis_array as $diagnosis_value){ echo "- ",$diagnosis_value, "   "; }}?></td>
                      <td><?php if($el_array == "NULL"){ echo "NULL";} else{
                      foreach($el_array as $el_value){ echo "- ",$el_value, "   "; }}?></td>
                    </tr>
                  <?php} ?>
                </table>
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Minimum Date of Diagnosis</th>
                    <th>Maximum Date of Diagnosis</th>
                    <th>Minimum Forced Vital Capacity</th>
                    <th>Maximum Forced Vital Capacity</th>
                    <th>Minimum ALSFRS-R Total</th>
                    <th>Maximum ALSFRS-R Total</th>
                    <th>King's College Stage</th>
                  </tr>
                  <tr>
                    <td><?php if($min_date_diagnosis == "NULL"){ echo " "; } else{
                      echo $min_date_diagnosis; }?></td>
                    <td><?php if($max_date_diagnosis == "NULL"){ echo " "; } else{
                      echo $max_date_diagnosis; }?></td>
                    <td><?php if($min_vital_capacity == "NULL"){ echo " "; } else{
                      echo $min_vital_capacity; }?></td>
                    <td><?php if($max_vital_capacity == "NULL"){ echo " "; } else{
                      echo $max_vital_capacity; }?></td>
                    <td><?php if($min_als == "NULL"){ echo " "; } else{
                      echo $min_als; }?></td>
                    <td><?php if($max_als == "NULL"){ echo " "; } else{
                      echo $max_als; }?></td>
                    <td><?php if($kings_array == "NULL"){ echo "NULL";} else{
                    foreach($kings_array as $kings_value){ echo "- ",$kings_value, "   "; }}?></td>
                  </tr>
                </table>
              </div>
            <?php }
                ?>
              </table>
          </div>
        </div>
      </div>
    </div>
    <!-- TRIAL DATA -->

    <div class="container">
      <div class="row">
        <div class="col-log-9 col-md-9">
          <div class="panel panel-primary">
            <div class="panel-heading">Update Trial</div>
            <div class="panel-body">

                <?php echo form_open('trials/add_trial', 'class="form-horizontal"'); ?>
      <div class="form-group">
        <label class="col-sm-2 control-label">Trial Identifying Number</label>
        <div class="col-sm-10">
          <input type="text" name="trial_id" class="form-control input-sm" value="" placeholder="Trial Identifying Number" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Version</label>
        <div class="col-sm-10">
          <input type="text" name="trial_version" class="form-control input-sm" value="" placeholder="Trial Version Number" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Public Trial Title</label>
        <div class="col-sm-10">
          <input type="text" name="public_title" class="form-control input-sm" placeholder="Public Trial Title" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Sex</label>
        <div class="col-sm-10">
          <select class="form-control input-sm" name="sex" required>
            <option>Both</option>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>
      </div>
      <div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Minimum Date of Birth</label>
          <div class="col-sm-10">
            <input type="date" name="minimum_dob" class="form-control input-sm" placeholder="Minimum date of birth" required>
          </div>
        </div>
      </div>
      <div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Maximum Date of Birth</label>
          <div class="col-sm-10">
            <input type="date" name="maximum_dob" class="form-control input-sm" placeholder="Maximum date of birth" required>
          </div>
        </div>
      </div>
      <div class "form-check">
        <label class="col-sm-2 control-label" >Site of Onset</label>
          <div class="col-sm-10" style="margin-bottom: 20px">
            <label class="checkbox-inline"><input type="checkbox" name="site_one" value="Bulbar">Bulbar</label>
            <label class="checkbox-inline"><input type="checkbox" name="site_two" value="Spinal">Spinal</label>
            <label class="checkbox-inline"><input type="checkbox" name="site_three" value="Thoracic/ Respiratory">Thoracic/ Respiratory</label>
            <label class="checkbox-inline"><input type="checkbox" name="site_four" value="Cognitive/ Behavioural">Cognitive/ Behavioural</label>
          </div>
      </div>
      <br>
      <div>
        <div class "form-check">
          <label class="col-sm-2 control-label">Diagnosis</label>
            <div class="col-sm-10" style="margin-bottom: 20px">
              <label class="checkbox-inline"><input type="checkbox" name="diagnosis_als" value="ALS">ALS</label>
              <label class="checkbox-inline"><input type="checkbox" name="diagnosis_alsftd" value="ALSFTD">ALSFTD</label>
              <label class="checkbox-inline"><input type="checkbox" name="diagnosis_pls" value="PLS">PLS</label>
              <label class="checkbox-inline"><input type="checkbox" name="diagnosis_kennedys" value="Kennedys">Kennedys</label>
              <label class="checkbox-inline"><input type="checkbox" name="diagnosis_pbp" value="PBP">PBP</label>
              <label class="checkbox-inline"><input type="checkbox" name="diagnosis_unknown" value="Unknown">Unknown</label>
            </div>
        </div>
      </div>
      <div>
        <div class "form-group">
          <label class="col-sm-2 control-label">El Escorial</label>
            <div class="col-sm-10" style="margin-bottom: 20px">
              <label class="checkbox-inline"><input type="checkbox" name="el_suspected" value="Suspected">Suspected</label>
              <label class="checkbox-inline"><input type="checkbox" name="el_possible" value="Possible">Possible</label>
              <label class="checkbox-inline"><input type="checkbox" name="el_lab_supported" value="Lab Supported Probable">Lab Supported Probable</label>
              <label class="checkbox-inline"><input type="checkbox" name="el_probable" value="Probable">Probable</label>
              <label class="checkbox-inline"><input type="checkbox" name="el_definite" value="Definite">Definite</label>
            </div>
        </div>
      </div>
      <div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Minimum Date of Diagnosis</label>
          <div class="col-sm-10">
            <input type="date" name="min_date_of_diagnosis" class="form-control input-sm" placeholder="Minimum Date of Diagnosis">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Maximum Date of Diagnosis</label>
        <div class="col-sm-10">
          <input type="date" name="max_date_of_diagnosis" class="form-control input-sm" placeholder="Maximum Date of Diagnosis">
        </div>
      </div>
      <div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Minimum Forced Vital Capacity (%)</label>
          <div class="col-sm-10">
            <input type="number" name="min_vital_capacity" min="0" max="100" class="form-control input-sm" placeholder="Minimum Vital Capacity">
          </div>
        </div>
      </div>
      <div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Maximum Forced Vital Capacity</label>
          <div class="col-sm-10">
            <input type="number" name="max_vital_capacity" min="0" max="100" class="form-control input-sm" placeholder="Maximum Vital Capacity">
          </div>
        </div>
      </div>
      <div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Minimum ALSFRS-R Total Score</label>
          <div class="col-sm-10">
            <input type="number" name="min_alsfrs_score" min="0" max="48" class="form-control input-sm" placeholder="Minimum ALSFRS-R Total Score">
          </div>
        </div>
      </div>
      <div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Maximum ALSFRS-R Total Score</label>
          <div class="col-sm-10">
            <input type="number" name="max_alsfrs_score" min="0" max="48" class="form-control input-sm" placeholder="Maximum ALSFRS-R Total Score">
          </div>
        </div>
      </div>
      <div>
        <div class "form-group">
          <label class="col-sm-2 control-label">King's College Stage</label>
            <div class="col-sm-10" style="margin-bottom: 50px">
              <label class="checkbox-inline"><input type="checkbox" name="k_c_one" value="1">1</label>
              <label class="checkbox-inline"><input type="checkbox" name="k_c_two_a" value="2A">2A</label>
              <label class="checkbox-inline"><input type="checkbox" name="k_c_two_b" value="2B">2B</label>
              <label class="checkbox-inline"><input type="checkbox" name="k_c_three" value="3">3</label>
              <label class="checkbox-inline"><input type="checkbox" name="k_c_four_a" value="4A">4A</label>
              <label class="checkbox-inline"><input type="checkbox" name="k_c_four_b" value="4B">4B</label>
            </div>
        </div>
      </div>
      <div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="submit" name="add_trial" class="btn btn-mid btn-success" value="Update Trial">
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>
</div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
