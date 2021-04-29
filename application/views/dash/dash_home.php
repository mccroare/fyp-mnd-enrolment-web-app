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
    <title>MND CLinical Trial Enrolment</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

  </head>
  <body>
    <!-- dash nav -->
    <?php $this->load->view('dash/inc/nav'); ?>
    <!-- dash nav -->

    <!--- Complete Bootstrap Course -->
    	<div class="container">
    		<div class="row justify-content-center text-center">
    			<div class="col-10 py-5">
    				<h1>Motor Neurone Disease</h1>
    				<p>Motor Neurone Disease (MND) is a progressive neurological condition that attacks the motor neurones, or nerves, in the brain and spinal cord. This means messages gradually stop reaching the muscles, which leads to weakness and wasting.</p>
    			</div>
    		</div>
    	</div>
    	<!--- Complete Bootstrap Course -->

    	<!--- Start Jumbotron -->
    	<div class="jumbotron">
    		<div class="container">
    			<h2 class="text-center pt-5 pb-3">Aims of this Project</h2>
    			<div class="row justify-content-center text-center">
    				<div class="col-10 col-md-4">
    					<div class="feature">
    						<img src="assets/img/educate-icon.png">
    						<h3>INFORM</h3>
    						<small>Inform requirements on Motor Neurone Disease and the clinical trial enrolment process.</small>
    					</div>
    				</div>
    				<div class="col-10 col-md-4">
    					<div class="feature">
    						<img src="assets/img/research-icon.png">
    						<h3>RESEARCH</h3>
    						<small>Research the MND patient data that is used for enrollment in clinical trials.</small>
    					</div>
    				</div>
    				<div class="col-10 col-md-4">
    					<div class="feature">
    						<img src="assets/img/create-icon.png">
    						<h3>CREATE</h3>
    						<small>Create a prototype to demonstrate interaction with MND patient data in the enrollment process.</small>
    					</div>
    				</div>
    			</div><!--- End Row -->
    		</div><!--- End Container -->
    	</div>
    	<!--- End Jumbotron -->


    	<!--- Two Column Section -->
    	<div class="container py-5">
    		<div class="row justify-content-center text-center">
            <h1>MND Data</h1>
            <!--<h3><a href="<?php echo base_url(); ?>downloads/clinical_trial_details.pdf">Clinical Trial Details Mapping PDF</a></h3>-->
            <img src="assets/img/Picture1.png">
            <img src="assets/img/spacer_2.png">
    		</div>
    	</div>

      <!--- Start Jumbotron -->
      <div class="jumbotron">
        <div class="container">
          <div class="row justify-content-center text-center">
            <h2>CDISC Clinical Trial Register Data Model</h2>
            <img src="assets/img/cdisc_ctr_1.png">
          </div><!--- End Container -->
        </div>
      <!--  <div class="container">
          <div class="row justify-content-center text-center">
            <img src="assets/img/Picture2.png">
          </div>
        </div>-->
    </div>
      <!--- End Jumbotron -->


      <div class="container">
        <div class="row justify-content-center py-5">
          <img src="assets/img/space.png">
        </div>
      </div>

    	<!--- End Two Column Section -->

      <!-- footer -->
      <div class="container">
        <div class="row">
          <nav class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="container">
            </div>
          </nav>
      </div>
    </div>
      <!-- footer -->


    <script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
