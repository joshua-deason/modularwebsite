<nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-primary" style="margin-bottom: 20px">
  <div class="container" style="margin: 0;">
    <a class="navbar-brand" href="<?php echo $website_url; ?>/welcome"><?php echo $website_title; ?></a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse mr-auto" id="navbar-primary">
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="<?php echo $website_url; ?>/welcome">
              <?php echo $website_title; ?>
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <ul class="navbar-nav lg-auto ml-auto">
      	<li class="nav-item">
      		<a class="nav-link" href="<?php echo $website_url ?>/index">Home</a>
      	</li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $website_url ?>/features">Features</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link hidden" href="<?php echo $website_url ?>/api">API Information</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" href="<?php echo $website_url ?>/demosignup">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $website_url ?>/login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>