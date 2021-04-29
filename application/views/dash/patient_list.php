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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />


  </head>
  <body>
    <!-- dash nav -->
    <?php $this->load->view('dash/inc/nav'); ?>
    <!-- dash nav -->

    <!-- sidebar -->
    <div class="col-lg-3 col-md-3">
      <?php $this->load->view('dash/inc/sidebar'); ?>
    </div>
    <!-- sidebar -->

    <!-- dash data -->
    <div class="container">
      <div class="row">
        <div class="table-responsive">
          <div class="panel panel-primary">
            <div class="panel-heading">Patients</div>
            <div class="panel-body table-responsive">
              <table id="patient_data" class="table table-striped table-hover">
                <thead>
                <tr>
                  <th>Patient ID</th>
                  <th>Name</th>
                  <th>Sex</th>
                  <th>DOB</th>
                  <th>Site of Onset</th>
                  <th>Diagnosis</th>
                  <th>El Escorial</th>
                  <th>Date of Diagnosis</th>
                  <th>Forced Vital Capacity (%)</th>
                  <th>ALSFRS-R Total</th>
                  <th>King's College Stage</th>
                  <!--<th>Delete</th>-->
                </tr>
                </thead>
                <?php
                $patient_list = $this->db->get('patient');
                foreach ($patient_list->result() as $patient)
                {?>
                  <tr>
                  <td><?php echo  $patient->patient_id; ?></td>
                  <td><?php echo  $patient->full_name; ?></td>
                <?php
                  //$patient_criteria = $this->db->get('patients_criteria');
                  $patient_criteria = $this->db->get_where('patients_criteria', array('patient_id' => $patient->patient_id));
                  foreach ($patient_criteria->result() as $patient_c)
                  {?>
                    <td><?php echo  $patient_c->criteria_value; ?></td>
                    <!--<td><?php //echo  $patient->alsfrs_score; ?></td>
                    <td><?php //echo  $patient->site_of_onset; ?></td>
                    <td><?php //echo  $patient->k_c_staging; ?></td>
                    <td><?php //echo  $patient->date_of_diagnosis; ?></td>
                    <td><?php //echo  $patient->dob; ?></td>-->
                    <!--<td><a href="#" class="btn btn-warning btn-block btn-xs">Edit</a></td>-->
                    <?php
                   }?>
                    <!--<td><a href="#" class="btn btn-danger btn-block btn-xs">Delete</a></td>-->
                  </tr>
                <?php
               }?>

              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- dash data -->

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>

<script>
// Initialise datatable
$(document).ready(function(){
     $('#patient_data').DataTable();
});
</script>
