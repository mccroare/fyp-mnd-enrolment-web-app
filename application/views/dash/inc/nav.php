


<nav class="navbar navbar-inverse">
  <div class="container">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"></button>
      <a class="navbar-brand" href="<?php echo site_url('dash'); ?>">MND Clinical Trial Enrolment</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('patient/dashboard'); ?>">Dashboard</a></li>
        <li><a href="<?php echo site_url();?>home/logout">Log out</a></li>
        <li><a href="<?php echo site_url('dash'); ?>">Hi <?php echo $_SESSION['u_name']; ?></a>
      </ul>
    </div>

  </div>
</nav>
