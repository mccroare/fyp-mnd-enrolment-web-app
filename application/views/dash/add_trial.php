<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( !$_SESSION['u_name'])
{
  redirect('home', 'refresh');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MND Clinical Trial Enrolment</title>
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

    <!-- dash data -->
    <div class="container">
      <div class="row">
        <div class="col-log-9 col-md-9">
          <div class="panel panel-primary">
            <div class="panel-heading">Add Trial</div>
            <div class="panel-body">
              <?php echo form_open('trials/add_trial', 'class="form-horizontal"'); ?>
              <div class="form-group">
                <label class="col-sm-2 control-label">Trial Identifying Number</label>
                <div class="col-sm-10">
                  <input type="text" name="trial_id" class="form-control input-sm" placeholder="Trial Identifying Number" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Trial Version Number</label>
                <div class="col-sm-10">
                  <input type="number" name="trial_version" class="form-control input-sm" placeholder="Trial Version Number" required>
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
                  <label class="col-sm-2 control-label">Maximum Forced Vital Capacity (%)</label>
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
                    <input type="submit" name="add_trial" class="btn btn-mid btn-success" value="Add Trial">
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- dash data -->

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
