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
            <div class="panel-heading">Add Patient</div>
            <div class="panel-body">
              <?php echo form_open('patient/add_patient_process', 'class="form-horizontal"'); ?>
              <div class="form-group">
                <label class="col-sm-2 control-label">Patient ID</label>
                <div class="col-sm-10">
                  <input type="text" name="patient_id" class="form-control input-sm" placeholder="Patient ID" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Full Name</label>
                <div class="col-sm-10">
                  <input type="text" name="patient_name" class="form-control input-sm" placeholder="Patient Name" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sex</label>
                <div class="col-sm-10">
                  <select class="form-control input-sm" name="sex" required>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Date of Birth</label>
                <div class="col-sm-10">
                  <input type="date" name="dob" class="form-control input-sm" placeholder="Date of Brith" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Site of Onset</label>
                <div class="col-sm-10">
                  <select class="form-control input-sm" name="site_of_onset" required>
                    <option></option>
                    <option>Bulbar</option>
                    <option>Spinal</option>
                    <option>Thoracic/ Respiratory</option>
                    <option>Cognitive/ Behavioural</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Diagnosis</label>
                <div class="col-sm-10">
                  <select class="form-control input-sm" name="diagnosis" required>
                    <option></option>
                    <option>ALS</option>
                    <option>ALSFTD</option>
                    <option>PLS</option>
                    <option>PMA</option>
                    <option>Kennedys</option>
                    <option>PBP</option>
                    <option>Unknown</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">El Escorial</label>
                <div class="col-sm-10">
                  <select class="form-control input-sm" name="el_escorial" required>
                    <option></option>
                    <option>Suspected</option>
                    <option>Possible</option>
                    <option>Lab Supported Probable</option>
                    <option>Probable</option>
                    <option>Definite</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Date of Diagnosis</label>
                <div class="col-sm-10">
                  <input type="date" name="date_of_diagnosis" class="form-control input-sm" placeholder="Date of Diagnosis" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Forced Vital Capacity (%)</label>
                <div class="col-sm-10">
                  <input type="number" min="0" max="100" name="vital_capacity" class="form-control input-sm" placeholder="Vital Capacity" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">ALSFRS-R Total Score</label>
                <div class="col-sm-10">
                  <input type="number" min="0" max="48" name="alsfrs_score" class="form-control input-sm" placeholder="ALSFRS-R Total Score" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">King's College Staging</label>
                <div class="col-sm-10">
                  <select class="form-control input-sm" name="kings_college_stage" required>
                    <option></option>
                    <option>1</option>
                    <option>2A</option>
                    <option>2B</option>
                    <option>3</option>
                    <option>4A</option>
                    <option>4B</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" name="add_patient" class="btn btn-sm btn-success" value="Add Patient">
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
