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
        <!--
        <li class="nav-item">
          <a class="nav-link" href="notes/create.php">Notes</a>
        </li>
        -->
        <?php echo $customNavItems; ?>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbar-primary_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notes</a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-primary_dropdown_1">
            <a class="dropdown-item" href="<?php echo $website_url ?>/notes/listnotes.php">List All</a>
            <a class="dropdown-item" href="<?php echo $website_url ?>/notes/createnote.php">Create New</a>
           </div>
        </li>
        <div class="vertical"></div>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbar-primary_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["username"]; ?></a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-primary_dropdown_1">
            <a class="dropdown-item" href="<?php echo $website_url ?>/resetpassword">Reset Password</a>
            <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo $website_url ?>/logout">Logout</a>
            </div>
        </li>
      </ul>
    </div>
  </div>
</nav>