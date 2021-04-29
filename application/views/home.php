<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MND CLinical Trial Enrolment</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  </head>
  
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-lg-oush-4 col-md-push-4">
          <div class="panel panel-default" style="margin-top: 50px">
            <div class="panel-heading"> Login </div>
            <div class="panel-body">
              <?php echo form_open('home/login_process'); ?>
              <div class="form-group">
                <input type="text" name="u_name" class="form-control input-sm" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input type="password" name="u_pass" class="form-control input-sm" placeholder="Password" required>
              </div>
              <div class="form-group">
                <input type="submit" name="u_login" value="Login" class="btn btn-success btn-sm">
                <a href="<?php echo site_url('home/register'); ?>" class="btn btn-warning btn-sm"> Register </a>
              </div>
              <?php echo form_close(); ?>

            </div>
          </div>
        </div>
      </div>
    </div>


        <script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


  </body>
<html>
