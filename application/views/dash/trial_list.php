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
      <!-- sidebar col-log-9 col-md-9-->
    </div>

    <!-- dash data -->
    <div class="container">
      <div class="row">
        <div class="table-responsive">
          <div class="panel panel-primary">
            <div class="panel-heading">Trials</div>
            <div class="panel-body">
          <table id="patient_data" class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Trial Identification Number</th>
                <th>Trial Version</th>
                <th>Public Title</th>
                <th>Edit</th>
                <!-- <th>Delete</th> -->
              </tr>
            </thead>
            <?php
              $trial_list = $this->db->get('trial_details');
              foreach ($trial_list->result() as $trial)
              { ?>
              <tr>
                <td><?php echo $trial->trial_id; ?></td>
                <td><?php echo $trial->trial_version; ?></td>
                <td><a href="<?php echo site_url(); ?>trials/view_selected_trial/<?php echo $trial->trial_id; ?>/<?php echo $trial->trial_version ?>"><?php echo $trial->public_title; ?></a></td>
                <td><a href="<?php echo site_url(); ?>trials/update_trial/<?php echo $trial->trial_id; ?>/<?php echo $trial->trial_version ?>" class="btn btn-warning btn-block btn-xs">Update</a></td>
                <!-- <td><a href="<?php echo site_url(); ?>trials/delete_trial/<?php echo $trial->trial_id; ?>/<?php echo $trial->trial_version ?>" class="btn btn-primary btn-block btn-xs">Delete</a></td> -->
              </tr>
              <?php }
             ?>
          </table>

        </div>
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
